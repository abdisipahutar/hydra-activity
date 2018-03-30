<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Models\InstagramPost as InstagramPost;

class igCrawl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:igCrawl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crawl post from Instagram';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {   
        $tempData = self::crawl_tags('abxilsp1739jswnxlsm1');
    }


    static function crawl_tags($tags) {

        $current = self::fetch_instagram($tags);

        $posts = $current['graphql']['hashtag']['edge_hashtag_to_media']['edges'];

        if(is_array($posts)) {
            //empty result form IG
            if (empty($posts)) {
                $posts = $current['graphql']['hashtag']['edge_hashtag_to_top_posts']['edges'];    
            }

        $i = 1;
        foreach ($posts as $nodes) {
            foreach ($nodes as $node) {
                // echo "Post ".$i."\n";
                // echo "code : ".$node['shortcode']."\n";
                // echo "owner : ".$node['owner']['id']."\n";
                // echo "is_video : ".$node['is_video']."\n";
                // echo "likes -> ".$node['edge_liked_by']['count']."\n";
                // echo "image -> ".$node['display_url']."\n";
                // echo "caption -> ".$node['edge_media_to_caption']['edges'][0]['node']['text']."\n";

                $byCode = self::fetch_instagram_post($node['shortcode']);

                $byPost['user_photo'] = $byCode['graphql']['shortcode_media']['owner']['profile_pic_url'];
                $byPost['user_name'] = $byCode['graphql']['shortcode_media']['owner']['username'];
                $byPost['taken_at'] = $byCode['graphql']['shortcode_media']['taken_at_timestamp'];
                $byPost['taken_at'] = date("Y-m-d H:i:s", substr($byPost['taken_at'], 0, 10));
                if($node['is_video']){
                    $byPost['img_url'] = $byCode['graphql']['shortcode_media']['video_url'];
                }
                else{
                    $byPost['img_url'] = $byCode['graphql']['shortcode_media']['display_url'];
                }

                $existPost = InstagramPost::where('code', '=', ($node['shortcode']))->first();

                if($existPost){
                    self::updateIgPost($existPost, $byPost,$node);
                }
                else{
                    self::saveIgPost($node, $byPost);
                }

                $i++;
            }
        }


        }

    }

    static function fetch_instagram_post($post_id) {
        $url = "https://www.instagram.com/p/".$post_id."/?__a=1";
        $json_str = self::curl_get($url);
        $json = json_decode($json_str,true);
        if(isset($json)) {
            return $json;
        }

        return false;
    }

    static function updateIgPost($existPost, $byPost, $node){
        $existPost->user_photo = $byPost['user_photo'];
        $existPost->user_name = $byPost['user_name'];
        $existPost->taken_at = $byPost['taken_at'];
        $existPost->is_video = $node['is_video'];
        $existPost->likes = $node['edge_liked_by']['count'];
        $existPost->images = $byPost['img_url'];
        $existPost->caption = $node['edge_media_to_caption']['edges'][0]['node']['text'];
        $existPost->updated_datetime = date('Y-m-d H:i:s');

        $existPost->save();
    }

    static function saveIgPost($node, $byPost){
        $instagramPost = new InstagramPost();
        
        $status = $instagramPost->fill([
            'code' => $node['shortcode'],
            'owner' => $node['owner']['id'],
            'user_photo' => $byPost['user_photo'],
            'user_name' => $byPost['user_name'],
            'taken_at' => $byPost['taken_at'],
            'is_video' => $node['is_video'],
            'likes' => $node['edge_liked_by']['count'],
            'images' => $img = $byPost['img_url'],
            'is_approved' => 'PENDING',
            'caption' => $node['edge_media_to_caption']['edges'][0]['node']['text'],
            'created_datetime' => date('Y-m-d H:i:s'),
        ])->save();
    }


    static function fetch_instagram($hashtag, $cursor='',$fulldata=false) {
        $result = [];

        $url = 'https://www.instagram.com/explore/tags/'. $hashtag. '/?__a=1';
        if ($cursor != '')
            $url .= '&max_id='. $cursor;

        $json_str = self::curl_get($url);
        if(!empty($json_str)) {
            $list = json_decode($json_str, true);
            $result = $list;
        }

        return $result;
}

    static function curl_get($url) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_COOKIE, self::cookie());
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2709.0 Safari/537.36");
        
        $rs = curl_exec ($ch);
        
        curl_close ($ch);

        return $rs; 
    }

    static function cookie(){
        return 'rur=FTW; mid=WrTN5gAEAAFSpLQ-j0e2ZQauPot-; ig_vw=1280; ig_pr=2; ig_vh=612; csrftoken=xewnwEkVO3uvTlCHggqMLMAdH4mLzkBa; ds_user_id=1747115494; sessionid=IGSC7f754cc78bc5118c44c659c2ada67d6772696aab8e9d0d6b4abe8cf9b51821a0%3Aab4aguigDvvbsgzlxbSdQE5colXh8eJ5%3A%7B%22_auth_user_id%22%3A1747115494%2C%22_auth_user_backend%22%3A%22accounts.backends.CaseInsensitiveModelBackend%22%2C%22_auth_user_hash%22%3A%22%22%2C%22_platform%22%3A4%2C%22_token_ver%22%3A2%2C%22_token%22%3A%221747115494%3AlcUvbPaxFUGUDUDUqII0fYynO1UQBtwi%3A579c6fde93a48af9da9f600d5e6ecaa79a866902d61ee8158eda0dab40fa290b%22%2C%22last_refreshed%22%3A1521798645.6064145565%7D; ig_or=landscape-primary; urlgen="{\"time\": 1521798645\054 \"175.158.55.101\": 135478}:1ezJLb:k30eavjhWfwygiQrekBywDr2q7E"';
    }
}
