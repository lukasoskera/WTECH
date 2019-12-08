@extends('layouts.app')

@section('content')
    <!doctype HTML>

<HTML>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/32a3bde05d.js" crossorigin="anonymous"></script>
    <link href="{{asset('styles/SignUp.css')}}" rel="stylesheet">
    <title>LogIn</title>
</head>

<body>
<header class="header py-3 mb-2 kosik">
    <div class="row">
        <div id="volba" class="col-9 pl-4 text-left">
            <img class="logo" src="{{asset('images/logo.png')}}" alt="logo">

        </div>
        <div id="volba" class="col-1 text-center ">
            <i class="fas fa-align-justify"></i>
        </div>
        <div id="volba" class="col-1 text-center">
            <i class="fas fa-user"></i>
        </div>
        <div id="volba" class="col-1 text-center">
            <i class="fas fa-shopping-cart"></i>
        </div>
</header>

<div class="container mobil">
    <div class="row">
        <div id="volba" class="col-3 text-center">
            <a href="" class="btn btn-outline-dark btn-round btn-sm ml-2"> &#60;</a>
        </div>
        <div id="volba" class="col-6 text-center">
            <img class="logo" src="{{asset('images/logo.png')}}" alt="logo">
        </div>
        <div id="volba" class="col-3 text-center">
        </div>
    </div>
</div>

<hr class="clearfix w-100 pb-3 mt-0 mb-0">

<body>
<div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Prihlásenie</h5>
                        <form class="form-signin">

                            <div class="form-group row">
                                <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('E-Mailová adresa') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group row pb-3">
                                <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Heslo') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Zapamätať heslo') }}
                                </label>
                            </div>

                            <div class="container mt-4">
                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Prihlás sa') }}
                                    </button>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="row justify-content-center">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Zabudol si heslo?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-6 text-right pr-1">
                                        <label>Nemáš účet?</label>
                                    </div>
                                    <div class="col-6 text-left pl-1">
                                        <a href=""><u>Zaregistruj sa</u></a>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <button class="btn btn-lg btn-danger btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Prihlás sa cez Google</button>
                            <button class="btn btn-lg btn-primary  btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Prihlás sa cez Facebook</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</body>


<footer class="page-footer font-small blue pt-4">
    <div class="container-fluid text-center text-md-left">

        <div class="row">
            <hr class="clearfix w-100 pb-3">

            <div class="col-md-6 mb-3 text-center">
                <h5 class="text-uppercase">Kontaktné údaje</h5>
                <ul class="list-unstyled">
                    <li>
                        <p><b>Mail:</b> akjshasjkdhasjdh@jfhdfks.com</p>
                    </li>
                    <li>
                        <p><b>Telefón:</b> 0912 345 678</p>
                    </li>
                    <li>
                        <p><b>Adresa:</b> Adresová 10, 841 11, Bratislava</p>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 mb-3 text-center">
                <h5 class="text-uppercase">Nájdete nás na</h5>
                <ul class="list-unstyled">
                    <lo>
                        <i class="siete fab fa-facebook-square"></i>
                    </lo>
                    <lo>
                        <i class="siete fab fa-twitter-square"></i>
                    </lo>
                    <lo>
                        <i class="siete fab fa-google-plus-square"></i>
                    </lo>
                </ul>
            </div>

        </div>
    </div>
</footer>

</body>
</HTML>
@endsection
