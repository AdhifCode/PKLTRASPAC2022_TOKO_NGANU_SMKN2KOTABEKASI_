<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUser(){
        $data = User::get();
        return response()->json(['data'=>$data], 200);
    }
}
