@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="jumbotron bg-warning col-md-12">
            <h1> IMDB </h1>
        </div>
        <div class="col-md-12">
            <div class="banner text-white">
                <h1> Meus filmes </h1>
                <p>
                    O objetivo desta etapa é popular o conteúdo nesta página repassando uma lista de dados
                    no controller.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            @foreach($movies as $movie)
            <div class="card mt-3 mb-5">
                <div class="card-body">
                    <small> Nota: {{ $movie->nota }} </small>
                    <h3> {{ $movie->titulo }} </h3>
                    <p> {{ $movie->sinopse}} </p>
                    <p>
                        @foreach($genders as $gender)
                            @if($gender->id == $movie->gender_id)
                                {{ $gender->genero }}
                            @endif
                        @endforeach
                        {{-- {{ $movie->gender->genero }} --}}
                    </p>
                    <button class="btn btn-warning" id="btn">Avaliar</button>
                </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-12 mt-5 text-white">
            <h1> Mais para explorar </h1>
            <p> Os dados repassados para esta sessão </p>

            {{-- @foreach($movies as $movie) --}}

            {{-- @endforeach --}}
            {{-- <div class="row">
                <div class="col-md-2">
                    <div class="card card-body text-dark bg-warning">
                        <h3> Soul </h3>
                    </div>
                </div>

            </div> --}}
        </div>
    </div>
</div>
@endsection
