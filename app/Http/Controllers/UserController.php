<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
       $user = UserModel::find(1);
       return view ('user',  ['data' => $user]); 
}
}