<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Models\User as User;

class AuthController extends BaseController{

	public function getLogin(Request $request){
		return view('login');
	}

	public function postLogin(Request $request){
		$username = $request->username;
		$password = $request->password;

		$login = User::where('username', '=', $username)
						->where('password', '=', sha1($password))
						->first();

		if($login){
			$user = new \stdClass;
			$user->id = $login->id;
			$user->user_name = $login->username;
			$request->session()->put('user', $user);
			return redirect()->route('admin');
		}
		
		$request->session()->flash('flash_message', 'Login Gagal');
		return redirect()->route('getLogin');
	}

	public function getLogout(Request $request){
		$request->session()->flush();
		return redirect('/');
	}

}