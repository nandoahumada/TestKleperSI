@extends('layouts.master')

@section('content')

    <body>
        
        <form method="POST" action="{{route('respuestas.store')}}" class="container">
            
            @csrf

            @if (session('Finalizada'))

            <div class="alert Finalizada">{{session('Finalizada')}}</div>
                
            @endif

            @include('survey::standard', ['survey' => $survey])



        </form>

    </body>

@endsection
    