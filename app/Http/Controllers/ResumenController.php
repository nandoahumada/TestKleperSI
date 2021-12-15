<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VistaListar;
use DB;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

class ResumenController extends Controller
{

    public function calculateScores(Request $request)
    {
        
            if ($request){
                $username = \Auth::user()->name;
                                     
                $resumen1 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','1')
                -> get()
                -> sum('Puntaje');

$resumen2 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','2')
                -> get()
                -> sum('Puntaje');


$resumen3 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','3')
                -> get()
                -> sum('Puntaje');

$resumen4 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','4')
                -> get()
                -> sum('Puntaje');

$resumen5 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','5')
                -> get()
                -> sum('Puntaje');

$resumen6 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','6')
                -> get()
                -> sum('Puntaje');

$resumen7 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','7')
                -> get()
                -> sum('Puntaje');

$resumen8 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','8')
                -> get()
                -> sum('Puntaje');

$resumen9 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','9')
                -> get()
                -> sum('Puntaje');

$resumen10 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','10')
                -> get()
                -> sum('Puntaje');

$resumen11 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','11')
                -> get()
                -> sum('Puntaje');

$resumen12 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','12')
                -> get()
                -> sum('Puntaje');

$resumen14 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','14')
                -> get()
                -> sum('Puntaje');

$resumen15 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','15')
                -> get()
                -> sum('Puntaje');

$resumen17 = DB::table('SelectAnswersByUser')
                -> where('Encuestado', '=', $username)
                -> where('ID','=','17')
                -> get()
                -> sum('Puntaje');
        
    
                return view('resumen',['resumen1'=>$resumen1,
'resumen2'=>$resumen2,
'resumen3'=>$resumen3, 
'resumen4'=>$resumen4, 
'resumen5'=>$resumen5, 
'resumen6'=>$resumen6, 
'resumen7'=>$resumen7, 
'resumen8'=>$resumen8, 
'resumen9'=>$resumen9, 
'resumen10'=>$resumen10,
'resumen11'=>$resumen11,
'resumen12'=>$resumen12,
'resumen14'=>$resumen14,
'resumen15'=>$resumen15,
'resumen17'=>$resumen17]);

            }

    }

}
