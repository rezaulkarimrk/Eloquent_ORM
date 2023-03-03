<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use DB;
class PhoneController extends Controller
{
    public function index()
    {
        $phone = Phone::all();
        // $phone = DB::table('phones')->join('users', 'phones.user_id', 'users.id')->select('phones.*', 'users.name', 'users.email')->get();
        return view('numbers', compact('phone'));
    }
}
