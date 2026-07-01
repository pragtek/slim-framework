<?php

namespace App\Http\Controllers;

use App\User;

class ApiCrudController
{
    public function index($response, User $user)
    {
        $user = $user::find(1);

        // $user = Db::table('users')->find(1);
        $response->getBody()->write(json_encode($user, JSON_PRETTY_PRINT));

        return $response;
    }
}
