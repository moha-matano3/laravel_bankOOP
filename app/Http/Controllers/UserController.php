<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request){
        $user =  $request->all();

        // 1. create, 2. save
        User::create($user);
    }
}
