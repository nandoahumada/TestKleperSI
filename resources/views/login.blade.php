@extends('layouts.master')

@section('content')

        <div class="container">
    <p class="display-4"><Strong>Iniciar Sesión</Strong></p>

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
    <form class="col-md-8" method="POST" action="/login">
        {{ csrf_field() }}
        <div class="col-auto">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="col-auto">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        
        <div class="col-auto p-3">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Ingresar</button>
            <a class="btn btn-primary m-5" href="register" role="button">Registrarse</a>
        </div>

    </div>
    </form>

@endsection