<?php

namespace App\Http\Middleware;

use Closure;

class CustomAuth{
	public function handle($request, Closure $next)
	{
	
		// Role from routes
		// $role = $request->route()->getAction()['roles'];

		// I there is no user in sesion
		// If role from routes and role from session doesn't macth
		// dd($request->session()->get('user')->level_name, $role);

		if(!$request->session()->has('user')){
			return redirect('/login');
		}
		// if(!in_array($request->session()->get('user')->level_name, $role)){
		// 	return redirect('/');	
		// }

		return $next($request);
	}
}