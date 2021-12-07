@extends('site.master.layoutlogin')


@section('content')


	<div class="limiter">
		<div class="container-login100 py-5">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Login De Membro
					</span>

					<div class="wrap-input100 validate-input" data-validate = "É Necessário Um E-mail Válido: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Senha Requerida">
						<input class="input100" type="password" name="pass" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Esqueceu
						</span>
						<a class="txt2" href="#">
							Usuário / Senha?
						</a>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="" data-toggle="modal" data-target="#Cadastro">
							Criar Conta		
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							<li><a href="{{ route('site.home') }}" class="active">Home</a></li>

							<!-- Modal -->
			                <div class="modal fade" id="Cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Selecione o Tipo de Cadastro</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            <div class="modal-body">
							<div class="container">
								<div class="row">
									<div class="col">
										<br>
									    <div class="container">
										    <div class="card-deck flex-row flex-nowrap">
									            <a href="{{ route('site.cadprestadordeservico') }}">
										            <div class="card">
											            <div class="card-body">
										                    <h5 class="card-sub align-middle">Cadastro Prestador De Serviço</h5>
									                    </div>
									            </a>
								            </div>
							                </a>
						                </div>
					                    </div>
									</div>
									<br>
									<br>
									<div class="col">
									<br>
									<div class="container">
										    <div class="card-deck flex-row flex-nowrap">
									            <a href="{{ route('site.cadcliente') }}">
										            <div class="card">
											            <div class="card-body">
										                    <h5 class="card-sub align-middle">Cadastro Cliente</h5>
															<br>
									                    </div>
									            </a>
								            </div>
							                </a>
						                </div>
					                    </div>
									</div>
								</div>
								<br>
                            </div>
                            </div>
                            </div>
                        </div>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


@endsection