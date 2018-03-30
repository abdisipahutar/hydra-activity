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
		$data['posts'] = InstagramPost::where('is_approved', '=', 'APPROVED')->get();
		$data['page'] = '4_steps_x_boomerang_challenger';
		return view('4_steps_x_boomerang_challenger', $data);
	}

}