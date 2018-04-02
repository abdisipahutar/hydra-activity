<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Models\InstagramPost as InstagramPost;

class IgCrawController extends BaseController{

	public function getLogin(Request $request){
		dd('Login dulu');
	}

	public function getIndex(Request $request){
		return view('admin_index');
	}

	public function getPostToAdm(Request $request){

		$elq = InstagramPost::where('is_approved', '=', $request->status)->orderBy('taken_at', 'desc');

		$data['data'] = $elq->paginate(10);

		return view('ig_admin', $data);

	}

	public function igAction(Request $request){
		$action = $request->action;
		$code = $request->code;

		$igPost = InstagramPost::where('code', '=', $code)->first();
		$igPost->is_approved = $action;

		$ret['status'] = $igPost->save();

		return response()->json($ret);
	}

}