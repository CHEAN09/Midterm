<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {

        $usr = User::orderBy('lname')->get();

        return view('users.index', ['users' => $usr]);
    }
}
