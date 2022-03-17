<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'razon_social',
        'RUT','direccion',
        'plan_contratado',
        'proveedor',
        'persona_poliza',
        'contacto_poliza',
        'mail_poliza',
        'email',
        'password',
        'comp_name',
        'area',
        'phone',
        'workers_num',
        'pcs_num'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $rules = [
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
    ];


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
