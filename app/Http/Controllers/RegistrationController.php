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
            'razon_social' => 'string',
            'RUT' => 'required|max:10',
            'direccion' => 'string',
            'plan_contratado' => 'required|string',
            'proveedor' => 'string',
            'persona_poliza' => 'required|string',
            'contacto_poliza' => 'numeric|min:8',
            'mail_poliza' => 'required|string|email',
            'email'=> 'required|string|email|unique:users',
            'password' => 'required|min:8|alpha_num',
            'comp_name' => 'required',
            'area',
            'phone' => 'required|numeric|min:8',
            'workers_num' => 'numeric|min:1',
            'pcs_num' => 'numeric|min:1'

        ]
        );

        $user = User::create(request(['name','razon_social','RUT','direccion','plan_contratado','proveedor','persona_poliza','contacto_poliza',
        'mail_poliza','email','password','comp_name','area','phone','workers_num','pcs_num']));

        return response()->json([
                     'message' => 'Successfully created user!'
                 ], 201);

        auth()->login($user);

        return redirect()-> to ('/login');
    }
}
