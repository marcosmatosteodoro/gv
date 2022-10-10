@extends('site.layouts.basico')


@section('conteudo')

<div id="meu-carrosel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

        <div class="item-carrossel carousel-item active " style="background-image: url('{{ asset('img/background_imagens/consulta.jpg') }}');">
            <div class="div-carrosel">
                <div class="meuCardTransparente">
                    <h2>{{ $carrossel1Titulo }}</h2>
                    <span>{{ $carrossel1Texto }}</span>
                    <a href="especialidades.php"><button class="btn my-button">{{ $carrossel1Botao }}</button></a>
                </div>
            </div>
        </div>

        <div class="item-carrossel carousel-item " style="background-image: url('{{ asset('img/background_imagens/exames.jpg') }}');">
            <div class="div-carrosel">
                <div class="meuCardTransparente">
                    <h2>{{ $carrossel2Titulo }}</h2>
                    <span>{{ $carrossel2Texto }}</span>
                    <a href="exames.php"><button class="btn my-button">{{ $carrossel2Botao }}</button></a>
                </div>
            </div>
        </div>
        
        <div class="item-carrossel carousel-item " style="background-image: url('{{ asset('img/background_imagens/plano_de_saude.jpg') }}');">
            <div class="div-carrosel">
                <div class="meuCardTransparente">
                    <h2>{{ $carrossel3Titulo }}</h2>
                    <span>{{ $carrossel3Texto }}</span>
                    <a href="planos.php"><button class="btn my-button">{{ $carrossel3Botao }}</button></a>
                </div>
            </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>


<div id="grupo-de-cards" class="mtb30"> 
    <div class="container">
        <div class="row my_row">

            <a href="infraestrutura.php?i=cirurgia" class="col meu-card">
                <img src="{{ asset('img/background_imagens/cirurgia.jpg') }}" alt="">
                <h3>{{ $cardInfra1Titulo }}</h3>
                <span>{{ $cardInfra1Texto }}</span>
            </a>

            <a href="infraestrutura.php?i=Emergências/UTI" class="col meu-card">
                <img src="{{ asset('img/background_imagens/emergencia.jpg') }}" alt="">
                <h3>{{ $cardInfra2Titulo }}</h3>
                <span>{{ $cardInfra2Texto }}</span>
            </a>

            <a href="infraestrutura.php?i=Pediatria" class="col meu-card">
                <img src="{{ asset('img/background_imagens/pediatria.jpg') }}" alt="">
                <h3>{{ $cardInfra3Titulo }}</h3>
                <span>{{ $cardInfra3Texto }}</span>
            </a>
            <a href="infraestrutura.php?i=centroMedico" class="col meu-card">
                <img src="{{ asset('img/background_imagens/centro_medico.jpg') }}" alt="">
                <h3>{{ $cardInfra4Titulo }}</h3>
                <span>{{ $cardInfra4Texto }}</span>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <div id="frase1">
        <h2>{{ $frase1Titulo }}</h2>
        <p>{{ $frase1Texto }}</p>
    </div>
</div>

<div id="especialidades-exames">
    <div class="container">

        <div class="bloco">
            <h5>{{ $especilidadeTitulo }}</h5>
            <div class="row bloco-cards mtb30">

                <a href="especialidades.php?e=Ortopedia" class="col bloco-card">
                    <div class="card-icone">
                        <img src="{{ asset('img/icons_especialidades/ortopedia.png') }}" alt="">
                    </div>
                    <div class="card-conteudo">
                        <h5>{{ $cardEspecilidade1 }}</h5>
                    </div>
                </a>

                <a href="especialidades.php?e=Cardiologia" class="col bloco-card">
                    <div class="card-icone">
                        <img src="{{ asset('img/icons_especialidades/cardiologia.png') }}" alt="">
                    </div>
                    <div class="card-conteudo">
                        <h5>{{ $cardEspecilidade2 }}</h5>
                    </div>
                </a>

                <a href="especialidades.php?e=Urologia" class="col bloco-card">
                    <div class="card-icone">
                        <img src="{{ asset('img/icons_especialidades/urologia.png') }}" alt="">
                    </div>
                    <div class="card-conteudo">
                        <h5>{{ $cardEspecilidade3 }}</h5>
                    </div>
                </a>

                <a href="especialidades.php?e=Oncologia" class="col bloco-card">
                    <div class="card-icone">
                        <img src="{{ asset('img/icons_especialidades/ocnologia.png') }}" alt="">
                    </div>
                    <div class="card-conteudo">
                        <h5>{{ $cardEspecilidade4 }}</h5>
                    </div>
                </a>

                <a href="especialidades.php?e=Ginecologia" class="col bloco-card">
                    <div class="card-icone">
                        <img src="{{ asset('img/icons_especialidades/ginecologia.png') }}" alt="">
                    </div>
                    <div class="card-conteudo">
                        <h5>{{ $cardEspecilidade5 }}</h5>
                    </div>
                </a>

                <a href="especialidades.php?e=Gastroenterologia" class="col bloco-card">
                    <div class="card-icone">
                        <img src="{{ asset('img/icons_especialidades/gastroenterologia.png') }}" alt="">
                    </div>
                    <div class="card-conteudo">
                        <h5>{{ $cardEspecilidade6 }}</h5>
                    </div>
                </a>
            </div>
            <a href="especialidades.php">{{ $especilidadeLink }}</a>
        </div>

        <div class="bloco">
            <h5>{{ $exameTitulo }}</h5>
            <div class="row bloco-cards mtb30">
                <a href="exames.php?e=ultrassom" class="col bloco-card">
                    <div class="card-icone">
                        <img src="{{ asset('img/icons_exames/ultrassom.png') }}" alt="">
                    </div>
                    <div class="card-conteudo">
                        <h5>{{ $cardExame1 }}</h5>
                    </div>
                </a>

                <a href="exames.php?e=Tomografia-Computadorizada" class="col bloco-card">
                    <div class="card-icone">
                        <img src="{{ asset('img/icons_exames/tomografia.png') }}" alt="">
                    </div>
                    <div class="card-conteudo">
                        <h5>{{ $cardExame2 }}</h5>
                    </div>
                </a>

                <a href="exames.php?e=Ressonância-magnética" class="col bloco-card">
                    <div class="card-icone">
                        <img src="{{ asset('img/icons_exames/ressonancia.png') }}" alt="">
                    </div>
                    <div class="card-conteudo">
                        <h5>{{ $cardExame3 }}</h5>
                    </div>
                </a>
            </div>
            <a href="exames.php">{{ $exameLink }}</a>
        </div>

    </div>
</div>

<div id="frase2">
    <h2>{{ $frase2Titulo }}</h2>
    <h5>{{ $frase2Texto }}</h5>
</div>  


@endsection