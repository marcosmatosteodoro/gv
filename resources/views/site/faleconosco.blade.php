@extends('site.layouts.basico')


@section('conteudo')

<div class="conteudo-geral">

    <div class="container">

        <h1 class="titulo-conteudo-geral">{{ $faleConoscoTitulo }}</h1>
        <hr>

        <p class="texto-conteudo-geral">
            {{ $faleConoscoTexto }}
        <div class="email">
            <form id="Fale-Conosco" action="" method="post" name='nome-form'>
                {{-- $mensagem_FaleConosco  --}}
                <input name="origem" value="Fale-Conosco" type="hidden">
                <div class="linha-input">
                    <div class="group-form label-input">
                        <label for="">{{ $faleConoscoLabelNome }}</label>
                        <input class="form-control meu-input" type="text" name="nome" placeholder="{{ $faleConoscoPlaceholderNome }}">
                    </div>

                    <div class="group-form label-input">
                        <label for="">{{ $faleConoscoLabelEmail }}</label></label>
                        <input class="form-control meu-input" type="text" name="email" placeholder="{{ $faleConoscoPlaceholderEmail }}">
                    </div>
                </div>
                        
                <div class="group-form label-input" style="width: auto;">
                    <label for="">{{ $faleConoscoLabelCorpo }}</label></label>
                    <textarea  class="form-control meu-input" type="longtext" name="corpo" placeholder="{{ $faleConoscoPlaceholderCorpo }}" style="height: 150px;"></textarea>
                </div>
                
                <div class="botao-submit">
                    <button type="submit" class="btn btn-primary">{{ $faleConoscoBotao }}</label></button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection