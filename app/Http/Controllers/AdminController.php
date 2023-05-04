<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;
use DB;
use Hash; 

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts/default');
    }

    public function show(User $users)
    {
        $listing = DB::table('users')->get();
        return view('pages.list',compact('listing'));
    } 

    // public function edit()
    // {
    //     return view('users.edit',compact('users.edit'));
    // }

    // public function update()
    // {
    //     $user->update($request->all());
    //     return view('pages.list')->with('success','User updated successfully');
    // }

}
