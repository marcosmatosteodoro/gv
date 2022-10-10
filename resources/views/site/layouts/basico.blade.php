<!DOCTYPE html>
<html lang="{{ $langPage }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <title>Gestão de Vidas | {{ $tituloPage }}</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a href="{{ route("$routePage.site.home") }}" class="titulo-logo">
                    <span class="logo">GV</span>
                    <span id="titulo-site">{{ $nameLogo }}</span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: flex-end;">
                    <div class="navbar-nav">
                        <a class="nav-link my-nav-link" aria-current="page" href="{{ route("$routePage.site.home") }}">{{ $navLink1 }}</a>
                        <a class="nav-link my-nav-link"  href="{{ route("$routePage.site.quemsomos") }}">{{ $navLink2 }}</a>
                        <a class="nav-link my-nav-link"  href="{{ route("$routePage.site.faleconosco") }}">{{ $navLink3 }}</a>
                        <!--
                        <a class="nav-link my-nav-link"  href="planos.php">Planos</a>
                        -->
                    </div>

                    <!--
                    <div id="entrar">
                    <img id="icon-usuario" src="assets/img/default.jpeg" alt="Imagem do usuário">
                    <span id="texto-login" type="button">Entrar</span>
                    </div>
                    -->
                </div>
            </div>
        </nav>
    </header>
    <section>

        @yield('conteudo')

    </section>

    <footer>
        <div id="div-footer" class="bg-light">

            <div id="linha1Footer" class="linhaFooter">
                <div id="logo-redesSociais" class="coluna">
                    <div id="logo">
                        <a href="home.php" class="titulo-logo">
                            <span class="logo">GV</span>
                            <span id="titulo-site">{{ $nameLogo }}</span>
                        </a>
                    </div>

                    <div id="redesSociais">

                        <a href="#" class="mp-a">
                            <img src="{{ asset('img/icons_redes_sociais/facebook.png') }}" alt="Facebook">
                        </a>
                        <a href="#" class="mp-a">
                            <img src="{{ asset('img/icons_redes_sociais/instagram.png') }}" alt="Instagram">
                        </a>
                        <a href="#" class="mp-a">
                            <img src="{{ asset('img/icons_redes_sociais/Linkedin.png') }}" alt="Linkedin">
                        </a>
                        <a href="#" class="mp-a">
                            <img src="{{ asset('img/icons_redes_sociais/twitter.png') }}" alt="Twitter">
                        </a>
                        <a href="#" class="mp-a">
                            <img src="{{ asset('img/icons_redes_sociais/WhatsApp.png') }}" alt="WhatsApp">
                        </a>
                        
                    </div>
                </div>

                <div id="menu-footer" class="coluna">
                    <ul class="lista-footer">
                        <h3>{{ $menuNome }}</h3>
                        <li><a href="home.php">{{ $menuLink1 }}</a></li>
                        <li><a href="quemSomos.php">{{ $menuLink2 }}</a></li>
                        <li><a href="infraestrutura.php">{{ $menuLink3 }}</a></li>
                        <li><a href="especialidades.php">{{ $menuLink4 }}</a></li>
                        <li><a href="exames.php">{{ $menuLink5 }}</a></li>
                        <li><a href="planos.php">{{ $menuLink6 }}</a></li>
                        <li><a href="faleConosco.php">{{ $menuLink7 }}</a></li>

                    </ul>
                </div>
            </div>

            <div id="linha2Footer" class="linhaFooter">
                <div id="servicos-planos-exames" class="coluna">
                    <ul class="lista-footer">
                        <h3>{{ $servicosNome }}</h3>
                        <li><a href="infraestrutura.php?i=centroMedico">{{ $servicosLink1 }}</a></li>
                        <li><a href="infraestrutura.php?i=cirurgia">{{ $servicosLink2 }}</a></li>
                        <li><a href="infraestrutura.php?i=Emergências/UTI">{{ $servicosLink3 }}</a></li>
                        <li><a href="infraestrutura.php?i=Pediatria">{{ $servicosLink4 }}</a></li>
                    </ul>

                    <ul class="lista-footer">
                        <h3>{{ $especialidadesNome }}</h3>
                        <li><a href="especialidades.php?e=Ortopedia">{{ $especialidadesLink1 }}</a></li>
                        <li><a href="especialidades.php?e=Cardiologia">{{ $especialidadesLink2 }}</a></li>
                        <li><a href="especialidades.php?e=Urologia">{{ $especialidadesLink3 }}</a></li>
                        <li><a href="especialidades.php?e=Oncologia">{{ $especialidadesLink4 }}</a></li>
                        <li><a href="especialidades.php?e=Ginecologia">{{ $especialidadesLink5 }}</a></li>
                        <li><a href="especialidades.php?e=Gastroenterologia">{{ $especialidadesLink6 }}</a></li>
                    </ul>

                    <ul class="lista-footer">
                        <h3>{{ $examesNome }} </h3>
                        <li><a href="exames.php?e=Ultrasonografia">{{ $examesLink1 }}</a></li>
                        <li><a href="exames.php?e=Tomografia-Computadorizada">{{ $examesLink2 }}</a></li>
                        <li><a href="exames.php?e=Ressonância-Magnética">{{ $examesLink3 }}</a></li>
                    </ul>

                    <ul class="lista-footer">
                        <h3>{{ $planosNome }} </h3>
                        <li><a href="planos.php?p=plano-a">{{ $planosLink1 }}</a></li>
                        <li><a href="planos.php?p=plano-b">{{ $planosLink2 }}</a></li>
                        <li><a href="planos.php?p=plano-c">{{ $planosLink3 }}</a></li>
                    </ul>
                </div>
                <div id="emailFooter" class="coluna">
                    <div id="card-email">
                        <h3>{{ $emailTitulo }}</h3>
                        <p>{{ $emailTexto }}</p>

                        <form action="envia_email.php" method="post" id="email-footer">
                            {{-- '.$this->mensagem('email-footer', 0).' --}}
                            <input name="origem" value="footer" type="hidden">
                            <input class="form-control meu-input" type="text" name="nome" placeholder="{{ $emailPlaceholderNome }}">
                            <textarea class="form-control meu-input" type="longtext" name="corpo" placeholder="{{ $emailPlaceholderCorpo }}" style="height: 100px;"></textarea>
                            <button class="btn btn-secondary">{{ $emailBotao }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- $this->modal(); --}}
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/setup_modal.js') }}"></script>
        <script src="https://use.fontawesome.com/0756cd4100.js"></script>'
    </footer>
</body>
</html>