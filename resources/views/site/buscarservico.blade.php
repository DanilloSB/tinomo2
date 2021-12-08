@extends('site.master.layoutservico')

@section('content')
<body>
<br>
<br>  
<br>
<br>
<br>
<div class="container"> <div class=" text-center mt-5 ">
  <div class="row align-items-start">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ url ('assets/images/foto1.png') }}" width="100px" height="280px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Lorenzo Von Matterhorn </h5> 
                <p class="card-text">Serviço: Encanador <br> Localização: Suzano, SP <br> E-mail: lorenzo@gmail.com <br>Telefone: 11 95365-8126 <br></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ url ('assets/images/foto2.png') }}" width="100px" height="280px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Julia Sales</h5>
                <p class="card-text">Serviço: Eletricista <br>Localização: Tatuape, SP<br>E-mail: julia@gmail.com<br>Telefone: 11 97423-6352<br></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ url ('assets/images/foto3.png') }}" width="100px" height="280px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Disney Chaplin </h5> 
                <p class="card-text">Serviço: Desenhista <br> Localização: São Miguel, SP <br> E-mail: chaplin@gmail.com <br>Telefone: 11 94265-1526 <br></p>
            </div>
        </div>
    </div>
  </div>
<br>
<br>
</br>
  </br>
  <div class="row align-items-center">
  <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ url ('assets/images/foto5.png') }}" width="100px" height="280px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Júlia Atilano </h5> 
                <p class="card-text">Serviço: Manicure <br> Localização: Itaquera, SP <br> E-mail: atilano@gmail.com <br>Telefone: 11 98512-4965 <br></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ url ('assets/images/foto4.png') }}" width="100px" height="280px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Enzo Mondragão </h5> 
                <p class="card-text">Serviço: Designer <br> Localização: Suzano, SP <br> E-mail: mondenzo@gmail.com <br>Telefone: 11 91265-3326 <br></p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ url ('assets/images/foto6.png') }}" width="100px" height="280px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Nicole Ferreira </h5> 
                <p class="card-text">Serviço: Passeadora de cães<br> Localização: Penha, SP <br> E-mail: nicajuda@gmail.com <br>Telefone: 11 94485-1106 <br></p>
            </div>
        </div>
    </div>
  </div>
  </br>
  </br>
  </div>
</div>

</body>
@endsection