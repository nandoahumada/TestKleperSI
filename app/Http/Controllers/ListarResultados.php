<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VistaListar;
use DB;

class ListarResultados extends Controller
{

    public function listarViewAnswers(Request $request)
    {
        if ($request){
            
            $username = \Auth::user()->name;
            $VistaListar = DB::table('SelectAnswersByUser')
                        
                        -> where('Encuestado', '=', $username)
                        -> paginate(200);

            return view('resultados', [ 'VistaListar'=> $VistaListar]);          

        }
    }

}
