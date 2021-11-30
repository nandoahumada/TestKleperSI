<?php

namespace App\Http\Controllers;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('login');
    }
    
    

    public function store(Request $request)
    {
        //Error messages
        $messages = [
            "email.required" => "Email is required",
            "email.email" => "Email is not valid",
            "email.exists" => "Email doesn't exists",
            "password.required" => "Password is required",
            "password.min" => "Password must be at least 6 characters"
        ];
        
        // validate the form data
        $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users,email',
                'password' => 'required'
            ], $messages);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            // attempt to log
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password ], $request->remember)) {
                // if successful -> redirect forward
                return redirect()->to('/landing');
                        }
    
            // if unsuccessful -> redirect back
            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                'approve' => 'Wrong password or this account not approved yet.',
            ]);
        }
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/login');
    }
}
