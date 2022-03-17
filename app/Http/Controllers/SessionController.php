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
            "email.required" => "El Email es requerido",
            "email.email" => "El email no es valido",
            "email.exists" => "El email no existe",
            "password.required" => "Contraseña requerida",
            "password.min" => "Contraseña debe tener al menos 8 caracteres y ser alfanumerica"
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
