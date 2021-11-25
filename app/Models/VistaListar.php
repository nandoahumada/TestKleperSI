<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VistaListar extends Model
{
   
    protected $table = 'SelectAnswersByUser'; //tabla en db adp

        protected $attributes = [ 
            'Nro_Pregunta',
            'Pregunta',
        'Respuesta', //columnas que recupera la pagina
        'Encuestado',
        'Puntaje',
        'SumaScores'];



}
