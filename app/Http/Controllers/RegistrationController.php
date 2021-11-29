<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create()
    {

        return view('create');

    }

    public function store()
    {
        $this->validate(request(),
        [
            'name'=> 'required',
            'email'=> 'required|string|email|unique:users',
            'password' => 'required|confirmed'

        ]
        );

        $user = User::create(request(['name','email','password']));

        auth()->login($user);

        return redirect()-> to ('/login');
    }
}
