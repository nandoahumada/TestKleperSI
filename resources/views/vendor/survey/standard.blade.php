<div class="card">
    <div class="card-header bg-white p-4">
        <h2 class="mb-0">{{ $survey->name }}</h2>

        @if(!$eligible)
            Solo aceptamos
            <strong>{{ $survey->limitPerParticipant() }} {{ \Str::plural('entry', $survey->limitPerParticipant()) }}</strong>
            por usuario.
        @endif

        @if($lastEntry)
            La ultima vez que envio sus respuestas fue el <strong>{{ $lastEntry->created_at->diffForHumans() }}</strong>
        @endif

    </div>
    @if(!$survey->acceptsGuestEntries() && auth()->guest())
        <div class="p-5">
            Ingrese o registrese para tomar la encuesta. <div class="col-auto m-5">
                <a class="btn btn-primary" href="login" role="button">Ingresar</a>
            </div>
        </div>
    @else
        @foreach($survey->sections as $section)
            @include('survey::sections.single')
        @endforeach

        @foreach($survey->questions()->withoutSection()->get() as $question)
            @include('survey::questions.single')
        @endforeach

        @if($eligible)
            <button class="btn btn-primary">Enviar</button>
        @endif
    @endif
</div>