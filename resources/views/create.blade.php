@extends('layouts.master')

@section('content')

<div class="container">
    <p class="display-4"><Strong> Creación de Usuarios </Strong></p>
</div>


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <div class="container">
    <form class="col-md-8" method="POST" action="/register">
        {{ csrf_field() }}
        <div class="col-auto">
            <label for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>    
        <div class="col-auto">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="col-auto">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="col-auto">
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" class="form-control" id="password_confirmation"
                   name="password_confirmation">
                </div>

                <h1 class="display-6"> Datos de la empresa </h1>

                <div class="col-auto">
                    <label for="comp_name">Nombre de la Empresa:</label>
                    <input type="text" class="form-control" id="comp_name"
                           name="comp_name">
                        </div>        

                 <div class="col-auto">
                     <label for="area">Area de trabajo:</label>
                     <input type="text" class="form-control" id="area"
                       name="area">
                  </div>  

                <div class="col-auto">
                        <label for="phone">Telefono:</label>
                         <input type="text" class="form-control" id="phone"
                        name="phone">
                </div>  

                <div class="col-auto">
                    <label for="workers_num">Numero de Integrantes de la Empresa:</label>
                     <input type="text" class="form-control" id="workers_num"
                    name="workers_num">
                </div>  
                
                <div class="col-auto">
                <label for="pcs_num">Numero de estaciones de trabajo (Computadores/Notebooks):</label>
                 <input type="text" class="form-control" id="pcs_num"
                name="pcs_num">
                </div>  


        <div class="col-auto p-3">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Enviar</button>
        </div>
        
    </form>
    </div>
    
@endsection
