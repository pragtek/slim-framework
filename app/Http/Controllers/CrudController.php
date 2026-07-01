<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Support\View;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CrudController
{
    public function show(View $view)
    {
        return $view('crud.register');
    }

    public function store(Request $request, Response $response)
    {
        $formData = $request->getParsedBody();
		//dd($formData);

        return redirect('/home');
    }
}
