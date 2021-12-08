@extends('site.master.layoutlogin')

@section('content')


<div class="limiter">
		<div class="container-login100 py-5">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/img-01.png" alt="IMG">
				</div>

				<form action="{{ route('registrar_prestador') }}" method="post">
					@csrf
                    
					<span class="login100-form-title">
						Cadastro Prestador de Serviço 
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "É necessário o Nome Completo">
						<input class="input100" type="text" name="nome_prestador" required placeholder="Nome Completo">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate ="Endereço Correto">
						<input class="input100" type="text" name="end_prestador" required placeholder="Endereço Completo">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						    <i aria-hidden="true"></i>
						</span>
					</div>
                   <div class="wrap-input100 validate-input" data-validate = "Telefone Válido">
                        <input class="input100" type="text" name="telefone_prestador" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required placeholder="Telefone ou Celular: xx xxxxx-xxxx">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate ="CPF Válido">
						<input class="input100"  type="text" name="cpf_prestador" required placeholder="CPF: xxx.xxx.xxx-xx" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite um CPF no formato: xxx.xxx.xxx-xx">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						    <i aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Serviço Prestado">
						<input class="input100" type="text" name="profissao" required placeholder="Serviço Prestado">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "É necessário um E-mail Válido: ex@abc.xyz">
						<input class="input100" type="email" name="email_prestador" required placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Senha Requerida">
						<input class="input100" type="password" name="senha_prestador" required placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i aria-hidden="true"></i>
						</span>
					</div></br></br>
					
                    <div class="container-cadastrar100-form-btn">
						<button type="submit" class="login100-form-btn">
							Cadastrar
						</button>
					</div>
					<div   class = "text-center p-t-136">
					<li><a href  = "{{ route('site.login') }}" class = "active">Voltar</a></li>
                    </div>       

				</form>
				
			</div>
		</div>
</div>
@endsection