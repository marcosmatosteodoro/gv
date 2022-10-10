@extends('site.layouts.basico')


@section('conteudo')

<div class="conteudo-geral">

    <div class="container">

        <h1 class="titulo-conteudo-geral" >{{ $quemSomosTitulo }}</h1>
        <hr>
        {{ $quemSomosTexto }}
        <img class="imagem-conteudo-geral" src="{{ asset('img/background_imagens/quem_somos.png') }}" alt="">
    </div>
</div>

@endsection
