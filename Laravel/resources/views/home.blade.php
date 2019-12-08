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
    <link href="{{asset('styles/HomeScreen.css')}}" rel="stylesheet">
    <title>Homescreen</title>
</head>

<body>

<header class="header py-3">
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
            <a href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</header>

<div class="container topka">

    <div class="row menu hladaj">
        <div class="col-lg-10 col-sm-6 hladacik">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-lg-2 col-sm-6 hladacik">
            <button class="btn btn-outline-success my-2 my-sm-0 hladajtlac" type="submit">Search</button>
        </div>
    </div>

    <div class="row menu">
        <div class="col col-sm-6 col-md-3 col-lg-3 dropdown">
            <a href="{{route('filter', 0)}}"><div class=" product card">
                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Muži
                    </button></div></a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="col col-sm-6 col-md-3 col-lg-3 dropdown">
            <a href="{{route('filter', 1)}}"><div class=" product card">
                    <button class="btn btn-secondary " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ženy
                    </button></div></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="col col-sm-6 col-md-3 col-lg-3 dropdown">

            <a href="{{route('filter', 2)}}"><div class=" product card">
                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Deti
                    </button></div></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>

        </div>
        <div class="col col-sm-6 col-md-3 col-lg-3 dropdown">
            <a href="{{route('filter', 3)}}"><div class=" product card">
                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ostatné
                    </button></div></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </div>

</div>

<div id="titulny"><div id="carouselExampleIndicators" class="carousel slide my-4 pointer-event" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="{{asset('images/TitleImage1922.jpg')}}" alt="Prvy">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('images/TitleImage1922.jpg')}}" alt="Druhy">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="{{asset('images/TitleImage1922.jpg')}}" alt="treti">
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

<div id="produkty">

    <div class="products container">
        <h3> Najviac predávané </h3>
        <div class="row">

            @foreach($bestproducts as $product)
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="{{route('detail', $product->slug)}}"><div class=" product card">
                        <img class="img-fluid" src="{{asset('images/'.$product->slug.'.jpg')}}" alt="Product Image">
                        <h4 class="card-title produkt"> {{$product->name}} </h4 >
                        <h5 class="text-right produkt"> {{$product->getPrice()}} </h5>
                    </div></a>
                </div>
            @endforeach
        </div>
    </div>


    <div class="products container">
        <h3> Práve dorazilo </h3>
        <div class="row">
            @foreach($newproducts as $product)
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="{{route('detail', $product->slug)}}"><div class=" product card">
                            <img class="img-fluid" src="{{asset('images/'.$product->slug.'.jpg')}}" alt="Product Image">
                            <h4 class="card-title produkt"> {{$product->name}} </h4 >
                            <h5 class="text-right produkt"> {{$product->getPrice()}} </h5>
                    </div></a>
                </div>
            @endforeach
                {{ $newproducts->links() }}
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
@endsection
