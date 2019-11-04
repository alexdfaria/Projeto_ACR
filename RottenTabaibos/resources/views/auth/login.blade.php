<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RottenTabaibos</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="logo-container">
        </div>

        <div class="topnav">
            <a class="principal" href="/home">Home</a>
            <a href="{{ route('register') }}">Register</a>
        </div>

    </header>

    <form method="POST" action="{{ route('login') }}">
        @csrf 
        <div class="avatar-container"> 
            
            <img src= "/images/logo/1.png" alt="Avatar" class="avatar"> 
        </div> 
  
        <div class="login-container"> 
            <label for="email"><b>{{ __('E-Mail Address') }}</b></label> 
            <input type="text" placeholder="Inserir Nome do Utilizador / email" name="email" required> 

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
  
            <label><b>Palavra Passe</b></label> 
            <input type="password" placeholder="Inserir Palavra Passe" name="password" required> 

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <button type="submit" class="loginbtn">
                {{ __('Login') }}
            </button>

            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Memorizar Palavra Passe') }}
                </label>

            @if (Route::has('password.request'))
                <span class="psw">Esqueceu a 
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Palavra Passe') }}
                    </a>
                </span>
            @endif
            <br>
            <br>

            <span class="reg">Ainda não está registado? <a href="{{ route('register') }}">Registar</a></span>
            
        </div> 
    </form> 
</body>

</html>

<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
