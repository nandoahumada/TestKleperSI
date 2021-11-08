<?php

namespace App\Http\Controllers;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('login');
    }
    
    public function store()
    {
        $this->validate(request(),
        [
            'email'=> 'required|email',
            'password' => 'required'

        ]
        );
        
        auth()->attempt(request(['email', 'password']));
        
        return redirect()->to('/landing');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/login');
    }
}
