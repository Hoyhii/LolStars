<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $users = User::all();
        return view('main',compact('users'));
    }
}
