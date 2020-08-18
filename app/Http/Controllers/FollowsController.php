<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller 
{

    public function __construct(){
         $this->middleware('auth');

    }
    public function store(User $user){


        // what toggle does
        return auth()->user()->following()->toggle($user->profile);
    }
}
