@extends('layouts.master')

@section('content')

<div class="container">
<h2>Creacion de Usuarios</h2>
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

    <div class="container col-3">
    <form class="col ml-n5" method="POST" action="/register">
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

        <div class="col-auto m-5">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Enviar</button>
        </div>
        
    </form>
    </div>
    
@endsection
