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
    <link href="{{asset('styles/ProductScreen.css')}}" rel="stylesheet">
    <title>Productscreen</title>
</head>

<body>
<header class="header py-3 mb-2">
    <div class="row">
        <div id="volba" class="col-9 pl-4 text-left">
            <a href="{{route('home')}}"><img class="logo" src="{{asset('images/logo.png')}}" alt="logo"></a>
        </div>
        <div id="volba" class="col-1 text-center ">
            <i class="fas fa-align-justify"></i>
        </div>
        <div id="volba" class="col-1 text-center">
            <i class="fas fa-user"></i>
        </div>
        <div id="volba" class="col-1 text-center">
            <a href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i></a>
        </div>
</header>

<hr class="clearfix w-100 pb-3 mt-0 mb-0">

<a href="{{route('home')}}"><button class="btn btn-secondary ml-5 mb-2 spat">&#60; Späť</button></a>
<div class="produkt">
    <div class="container">
        <div class="row produkthlavny">
            <div class="col-md-6">
                <div id="titulny"><div id="carouselExampleIndicators" class="carousel slide my-4 pointer-event" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid productimage" src="{{asset('images/'.$product->slug.'.jpg')}}" alt="Prvy">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid productimage" src="{{asset('images/'.$product->slug.'.jpg')}}" alt="Druhy">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid productimage" src="{{asset('images/'.$product->slug.'.jpg')}}" alt="treti">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-4">
                <h2 class="mb-5 mt-4">{{$product->name}}</h2>
                <div class="row pl-5 mb-4 pt-5">
                    <div class="col-md-6">
                        <h4 class="mb-0">{{$product->size}}</h4>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            veľkosť
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">velkost</a>
                            <a class="dropdown-item" href="#">velkost</a>
                            <a class="dropdown-item" href="#">velkost</a>
                        </div>
                    </div>
                </div>

                <div class="row pl-5 mb-4 pt-5">
                    <div class="col-md-6">
                        <h4 class="mb-0">{{$product->color}}</h4>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            farba
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">farba</a>
                            <a class="dropdown-item" href="#">farba</a>
                            <a class="dropdown-item" href="#">farba</a>
                        </div>
                    </div>
                </div>

                <div class="row pl-5 mb-4 pt-5">
                    <div class="col-md-6">
                        <h4 class="mb-0">Množstvo</h4>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            počet
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">počet</a>
                            <a class="dropdown-item" href="#">počet</a>
                            <a class="dropdown-item" href="#">počet</a>
                        </div>
                    </div>
                </div>

                <div class="row align-bottom mt-5 pt-5">
                    <div class="col-md-6 text-left pl-4">
                        <h2>{{$product->getPrice()}}</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <form action="{{route('store')}}" method="POST">
                            {{ (csrf_field()) }}
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="hidden" name="name" value="{{$product->name}}">
                            <input type="hidden" name="price" value="{{$product->price}}">
                            <button class="btn btn-secondary ml-5 mb-3 kosikbut">
                                Pridaj do košíka
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row produkthlavny">
            <div class="col-md-6 mb-5 pr-4 pl-4">
                <h3>Detail produktu</h3>
                <p>{{$product->description}}}</p>
                <ul class="list-unstyled pl-4">
                    <li>
                        <p><b>Material:</b> Bavlna</p>
                    </li>
                    <li>
                        <p><b>Výrobca:</b> aldhaskjhdjash</p>
                    </li>
                    <li>
                        <p><b>Krajina pôvodu:</b> Sloakistan</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 mb-5 pr-4 pl-4">
                <h3>Starostlivosť</h3>
                <p>jhdflasdfhlfksdhhhhhhflgahegfhklasdgfasuykfgbksdhhhhhhflgahegfhklasdgfasuykfgbasejlksdhhhhhhflgahegfhklasdgfasuykfgbasejlfgajklehfgbehlashfgvaofgajklehfgbehlashfg
                    vaoasejlfgajklehfgbehlashfgvaouefgbdksdhhhhhhflgahegfhklasdgfasuykfgbasejlfgajklehfgbehlashfgvaoljasfgvaksegdjfvbakjsefgzklfgbasdjlfbasdjkfbaskjfvasjkfvasjkg</p>
                <ul class="list-unstyled pl-4">
                    <li>
                        <p><b>Pranie:</b> max. 40 stupňov</p>
                    </li>
                    <li>
                        <p><b>Žehlenie:</b> nie</p>
                    </li>
                    <li>
                        <p><b>Účel:</b> bežné nosenie</p>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>




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
