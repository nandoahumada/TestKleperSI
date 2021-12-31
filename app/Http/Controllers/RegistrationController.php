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
            'name'=> 'required|string',
            'email'=> 'required|string|email|unique:users',
            'password' => 'required|min:8|alpha_num',
            'comp_name' => 'required',
            'area',
            'phone' => 'required|numeric|min:8',
            'workers_num' => 'numeric|min:1',
            'pcs_num' => 'numeric|min:1'

        ]
        );

        $user = User::create(request(['name','email','password','comp_name','area','phone','workers_num','pcs_num']));

        auth()->login($user);

        return redirect()-> to ('/login');
    }
}
