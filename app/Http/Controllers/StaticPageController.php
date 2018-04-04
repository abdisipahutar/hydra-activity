<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Models\InstagramPost as InstagramPost;

class StaticPageController extends BaseController{

	public function get4StepSkinRoutine(Request $request){
		$data['page'] = '4_step_skin_routine';
		return view('4_step_skin_routine', $data);
	}

	public function getOriflameSkinCareSets(Request $request){
		$data['page'] = 'oriflame_skin_care_sets';
		return view('oriflame_skin_care_sets', $data);
	}

	public function get4StepXBoomerang(Request $request){
		$data['page'] = '4_steps_x_boomerang';
		return view('4_steps_x_boomerang', $data);
	}

	public function get4StepXBoomerangChallenger(Request $request){
		// $data['posts'] = InstagramPost::where('is_approved', '=', 'APPROVED')->get();
		$data['page'] = '4_steps_x_boomerang_challenger';
		return view('4_steps_x_boomerang_challenger', $data);
	}

	public function getIgPost(Request $request){
		$elq = InstagramPost::where('is_approved', '=', 'APPROVED')
										->orderBy('taken_at', 'desc')
										->offset($request->offset)
										->limit(16)
										->get();

		$html = '';
		foreach ($elq as $post) {
			
			$html .= '<div class="item-container video-container">';

				if($post->is_video){
					$html .= '<video controls="" autoplay="" loop="" playsinline muted>
								  <source width="100%;" src="'.$post->images.'" type="video/mp4">
								  Your browser does not support the video tag.
							</video>';
				}
				elseif(!$post->is_video){
					$html .= '<img width="100%;" src="'.$post->images.'">';
				}

				$html .= '<div class="ig-post-text-wrapper">
							<div class="text-2 text-left">'.
								$post->caption .'
							</div>
							<div class="poster-wrapper">
								<img class="avatar-ig-post" src="'.$post->user_photo.'">
								<div class="poster-text-wrapper">
								by <span style="color: #87bce6;">'.$post->user_name.'</span> onto Instagram <img class="love-icon" width="100%;" src="img/two-hearts-oriflame.png"> '.$post->likes.'
									<br> '.
									date("F j, Y, g:i a", strtotime($post->taken_at)).'
								</div>
							</div>
						</div>';

			$html .= '</div>';

		}
		return response()->json($html);
	}
	

}