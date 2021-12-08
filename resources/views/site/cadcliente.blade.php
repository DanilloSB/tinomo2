@extends('site.master.layoutlogin')

@section('content')

    <div class="limiter">
		<div class="container-login100 py-5">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/img-01.png" alt="IMG">
				</div>

				<form action="{{ route('registrar_cliente') }}" method="post">
					@csrf
					<span class="login100-form-title">
						Cadastro Cliente 
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "É necessário o Nome Completo">
						<input class="input100" type="text" name="nome_cliente" required placeholder="Nome Completo">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate ="Endereço Correto">
						<input class="input100" type="text" name="end_cliente" required placeholder="Endereço Completo">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
						    <i aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Telefone Válido">
                        <input class="input100" type="text" name="telefone_cliente" required placeholder="Telefone ou Celular: (xx) xxxxx-xxxx">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "É necessário um E-mail Válido: ex@abc.xyz">
						<input class="input100" type="email" name="email_cliente" required placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Senha Requerida">
						<input class="input100" type="password" name="senha_cliente" required placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i aria-hidden="true"></i>
						</span>
					</div>
					
                    <div class="container-cadastrar100-form-btn">
						<button type="submit" class="login100-form-btn">
							Cadastrar
						</button>
					</div>
					<div class="text-center p-t-136">
							<li><a href="{{ route('site.login') }}" class="active">Voltar</a></li>
                    </div>
				</form>
			</div>
		</div>
	</div>

@endsection
