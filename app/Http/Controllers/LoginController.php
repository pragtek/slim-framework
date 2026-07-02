<?php

namespace App\Http\Controllers;

use Auth;
use App\Support\View;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class LoginController
{
    public function show(View $view)
    {
        return $view('auth.login');
    }

    public function store(Request $request)
    {
		$data = $request->getParsedBody();
		$rules = [
			'email' => 'required|email',
			'password' => 'required'
		];
		
		$validator = validator(
            $data,
            $rules,
        );
        if ($validator->fails()) {
            dd($validator->errors());
        }
		
		
		$email = trim($data['email']);
		$password = trim($data['password']);		
		
        $successful = Auth::attempt($email, sha1($password));

        if (!$successful) {
            return redirect('/login');
        }

        return redirect('/home');
    }

    public function logout()
    {
        Auth::logout();

        if (Auth::guest()) {
            return redirect('/login');
        }
    }
}
