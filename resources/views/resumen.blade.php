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

@if( auth()->check() )


                <div class="card border-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">{{ auth()->user()->name }}</div>
                    <div class="card-body text-dark">
                      <h5 class="card-title">Resumen</h5>
                      <p class="card-text">El resumen de sus respuestas indica que:</p>
                    </div>
                  </div>

@endif  


<h1 class="display-6">Gracias por tomar esta auto-evaluación de seguridad, nuestro personal de se contactara con usted y emitira un informe con metricas y pautas a seguir</h1>

        
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