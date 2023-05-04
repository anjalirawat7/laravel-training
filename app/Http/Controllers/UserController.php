<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;


class UserController extends Controller
{
    public function index()
{
    // $user = DB::table('users')->get();
    // dd($user);
    return view('new');
}

public function store(Request $request)
{
    User::insert([]);
    $users = new User;
    $users->email = $request->email;
    $users->password = $request->password;
    $users->gender = $request->gender;
    $users->message = $request->message;
    $users->save();
    return redirect()->back()->with('message', 'Form Submitt successfully');
}
}
