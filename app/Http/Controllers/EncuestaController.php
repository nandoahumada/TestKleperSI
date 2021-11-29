<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MattDaneshvar\Survey\Models\Entry;
use MattDaneshvar\Survey\Models\Survey;

class EncuestaController extends Controller
{
    
    
    public function create(){

        $survey = $this -> survey();

        return view('startsurvey', ['survey'=> $this ->survey()]);

    }

    public function store(Request $request){

        $user = auth()->user();
        $survey = $this -> survey();
        $answers = $this->validate($request, $survey->rules);
        
        (new Entry)->for($survey)->by($user)->fromArray($answers)->push();
        // return back()->with('Finalizada','Gracias por su tiempo!');
        return redirect()->to('/resultados');

    }

    protected function survey(){

        return Survey::where('name','Auto Evaluación de Seguridad')->first();

    }
}
