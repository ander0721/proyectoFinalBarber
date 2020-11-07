@extends('layouts.app')

@section('content')
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input  type="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input  type="password" class="form-control" name="password_confirmation" id="password-confirm" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt">
					<img src="{{asset('login3/images/logo.PNG')}}" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="{{route('register')}}" method="POST">
                        @csrf
					<span class="login100-form-title">
						Registrarse
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text"name="name" id="name" placeholder="Nombres de usuario">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<img src="https://img.icons8.com/ios/16/000000/user-male-circle.png" aria-hidden="true"/>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email" placeholder="Correo electrónico">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<img src="https://img.icons8.com/ios/16/000000/important-mail.png" aria-hidden="true"/></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email_confirmation" id="email-confirm" placeholder="Confirmar correo electrónico">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<img src="https://img.icons8.com/ios/16/000000/important-mail.png" aria-hidden="true"/>
						</span>
                    </div>

                    <select name="rol" class="form-control form-control-lg"
                        id="rol"  >
                        <option >selecione rol</option>
                        @foreach ($roles as $role)
                        <option value="{{$role->name}}" name="{{$role->rol}}">{{$role->name}}</option>  
                        @endforeach
                    </select><br>
                   
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<img src="https://img.icons8.com/ios/16/000000/password--v1.png" aria-hidden="true"/>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Password is required" >
						<input class="input100" type="password" name="password_confirmation" id="password-confirm" required autocomplete="new-password"placeholder="Confirmar contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<img src="https://img.icons8.com/ios/16/000000/password--v1.png" aria-hidden="true"/>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Registrarse
						</button>
					</div>

					<div class="text-center p-t-12">
						
						<a class="txt2" href="index.html">
							Iniciar sesión
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	
@endsection
