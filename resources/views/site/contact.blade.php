@extends('site.master.layout')

@section('content')

    
    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container py-5">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Fale Conosco</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Digite sua dúvida que logo entraremos em contato.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ url ('assets/images/best-contact-us-pages-2.jpg') }}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="{{ route('registrar_contato') }}" method="post">
                            @csrf 
                          
                            <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="nome" type="text" class="form-control" placeholder="Nome Completo" required="required" data-error="O nome é obrigatório.">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" placeholder="Endereço de e-mail" required="required" data-error="É necessário um e-mail válido.">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="msg" rows="6" class="form-control" placeholder="Sua mensagem" required="required" data-error="Por favor, deixe-nos uma mensagem."></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Enviar</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** --> 
        
@endsection