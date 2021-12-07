@extends('site.master.layout')

@section('content')
<body><!-- ***** Preloader Start ***** -->
<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="{{ url ('assets/images/logo.png') }}" alt="Tinômo"/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('site.home') }}">Home</a></li>
                            <li><a href="{{ route('site.about') }}">Sobre</a></li>
                            <li><a href="{{ route('site.contact') }}">Contate-nos</a></li>
                            <li><a href="{{ route('site.login') }}">Login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
</body>


  <!-- ***** Features Big Item Start ***** -->
  <section class="section padding-top-70 padding-bottom-0" id="features">
  <br>
  <br>
  <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ url ('assets/images/Jobsx-Capa-Blog-26-1200x450.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Tinômo</h2>
                    </div>
                    <div class="left-text">
                    <p>Esse site foi criado com o objetivo de ajudar trabalhadores autonômos a conseguirem mais rentabilidade.
                        Sabendo disso, a Tinômo foi criado em Fevereiro de 2021 para atender esse público.
                    </p>
                    </div>
                </div>
            </div>
</section>
<!-- ***** Features Big Item End ***** -->


<br>

<div class="container">
  <div class="row">
    <div class="col-sm"> 
    <div class="left-heading">
        <h2 class="section-title">Missão</h2>
    </div>
    <p>Entregar um serviço com agilidade e comunicação direta, visando na qualidade e satisfação dos prestadores e clientes.</p>
    </div>
    <div class="col-sm">
    <div class="left-heading">
        <h2 class="section-title">Visão</h2>
    </div>
    <p>Ser referência nacional no ambiente de serviços autonômos.</p>
    </div>
    <div class="col-sm">
    <div class="left-heading">
        <h2 class="section-title">Valores</h2>
    </div>
    <p>• Transparência na entrega do serviço; <br>
    • Respeito a integridade do cliente; <br>
    • Entrega de resultados fiéis. 
    </p>
    </div>
  </div>
</div>
<br>
<br>
    <!-- ***** Footer Start ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title"></h2>
                    </div>
                    <div class="left-text">
                        <p></p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->
  
@endsection
