<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
class UserController extends Controller
{
    public function index()
    {
        // $user = DB::table('users')->join('phones', 'users.id', 'phones.user_id')->get();
        $user = User::all();
        return view('numbers', compact('user'));
    }
}
 