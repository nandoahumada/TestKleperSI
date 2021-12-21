@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col">
        <p class="display-4"><Strong> Resumen de su puntaje </Strong></p>
    <div class="col">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 


<div class="card mb-3">
    <div class="card-body">Muchas gracias por contestar nuestro Cyber Risk Assessment. Empezaremos a procesar la información para entregarle un scoring y recomendaciones personalizadas. Pero tranquil@, si contrataste el seguro, ¡ya cuentas con protección financiera!</li>
    
        <li class="list-group-item"> Es importante hacerte notar que aun cuando cada vulnerabilidad es importante, basta con que sólo una de estas sea explotada por un atacante, para penetrar sus defensas y exponer a daños financieros, operacionales, legales y por supuesto reputacionales.
    Dado que el 91% de los ataques exitosos comenzaron con un correo malicioso y un 47,9% de las personas dentro de una empresa sin entrenamiento son víctimas de ataques, es que te recomendamos comenzar ahora con un programa de concientización de ciberseguridad.</li>
    
    <li class="list-group-item"> Si no puedes o no tienes el tiempo de contestar este correo, podemos hacerlo por ti. Enviaremos un ingeniero especialista en ciberseguridad para realizar un assessment (tiene un costo adicional) 
    Recuerda además que debes siempre contar con un EDR, Firewall y políticas de parchado continuo. Si necesitas ayuda con esto, puedes ponerte en contacto con nosotros escribiendo a nuestro REDTEAM.</li>
    
    
    <li class="list-group-item">Seguiremos trabajando para hacer el ecosistema más seguro cada día.</li>


        <li class="list-group-item">Equipo ONION 3</li>
</div>
</div>

@if( auth()->check() )


                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">{{ auth()->user()->name }}</div>
                    <div class="card-body text-dark">
                      <h5 class="card-title">Resumen</h5>
                      <p class="card-text">El resumen de sus respuestas indica que:</p>
                    </div>
                  </div>

@endif 

        
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 1 es: {{ $resumen1}}
    </div>
</div>

<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 2 es: {{ $resumen2}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 3 es: {{ $resumen3}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 4 es: {{ $resumen4}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 5 es: {{ $resumen5}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 6 es: {{ $resumen6}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 7 es: {{ $resumen7}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 8 es: {{ $resumen8}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 9 es: {{ $resumen9}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 10 es: {{ $resumen10}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 11 es: {{ $resumen11}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 12 es: {{ $resumen12}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 14 es: {{ $resumen14}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 15 es: {{ $resumen15}}
    </div>
</div>
<div class="card">
    <div class="card-body">
        La suma de sus respuestas para la sección 17 es: {{ $resumen17}}
    </div>
</div>






        
        <div class = "row">
    <div class = "mx-auto">
      </div>
      </div>
</div>
</div>
</div>
@endsection