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
        $tempData = self::crawl_tags('4stepsXBoomerang');
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
        self::fetchSpecificPostByCode('BhDi_XDhQtz');

    }

    static function fetchSpecificPostByCode($code){
        $byCode = self::fetch_instagram_post($code);

        $node['shortcode'] = $byCode['graphql']['shortcode_media']['shortcode'];
        $node['owner']['id'] = $byCode['graphql']['shortcode_media']['owner']['id'];
        $byPost['user_photo'] = $byCode['graphql']['shortcode_media']['owner']['profile_pic_url'];
        $node['is_video'] = $byCode['graphql']['shortcode_media']['is_video'];
        $node['edge_liked_by']['count'] = $byCode['graphql']['shortcode_media']['edge_media_preview_like']['count'];
        $node['edge_media_to_caption']['edges'][0]['node']['text'] = $byCode['graphql']['shortcode_media']['edge_media_to_caption']['edges'][0]['node']['text'];

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
}
