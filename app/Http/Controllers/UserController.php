<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Bu Userlar royxati';
    }
    public function show( $user)
    {
        return view('users.show', ['name' => 'Hojiakbar']);
    }
    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
     dd($request->name);
    }
    public function edit($userId)
    {
        return view('users.edit');
    }
}
