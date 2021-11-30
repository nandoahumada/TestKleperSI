@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col">
        <p class="display-4"><Strong> Respuestas y su puntaje </Strong></p>
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
                      <h5 class="card-title">Resultados</h5>
                      <p class="card-text">El valor de sus respuestas es:</p>
                    </div>
                  </div>

@endif  


		<table class="table table-condensed table-striped table-bordered p-3">
            <thead>
            <tr>
                <th scope="col">Nro_Pregunta</th>
                <th scope="col">Pregunta</th>
                <th scope="col">Encuestado</th>
                <th scope="col">Respuesta</th>

                
            </tr>
            </thead>

            <tbody>

            @foreach($VistaListar as $resultados)
            <tr>
                <td>{{$resultados->Nro_Pregunta}}</td>
                <td>{{$resultados->Pregunta}}</td>
                <td>{{$resultados->Encuestado}}</td>
                <td>{{$resultados->Respuesta}}</td>
            </tr>
            @endforeach

            </tbody>

        </table>

        
        <div class = "row">
    <div class = "mx-auto">
        {{ $VistaListar->links()}}
      </div>
      </div>
</div>
</div>
</div>
@endsection