<!doctype HTML>

<HTML>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/32a3bde05d.js" crossorigin="anonymous"></script>
    <link href="{{asset('styles/SearchScreen.css')}}" rel="stylesheet">
    <title>Searchscreen</title>
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
            <i class="fas fa-shopping-cart"></i>
        </div>
</header>
<hr class="clearfix w-100 pb-3 mt-0 mb-0">

<div class="container topka">
    <div class="row menu">
        <div class="col col-sm-6 col-md-3 col-lg-3 dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="col col-sm-6 col-md-3 col-lg-3 dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="col col-sm-6 col-md-3 col-lg-3 dropdown">

            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>

        </div>
        <div class="col col-sm-6 col-md-3 col-lg-3 dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <button class="btn btn-secondary dropdown-toggle mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        farba
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">farba</a>
        <a class="dropdown-item" href="#">farba</a>
        <a class="dropdown-item" href="#">farba</a>
    </div>
    <button class="btn btn-secondary dropdown-toggle mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        vyrobca
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">farba</a>
        <a class="dropdown-item" href="#">farba</a>
        <a class="dropdown-item" href="#">farba</a>
    </div>
    <button class="btn btn-secondary dropdown-toggle mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        velkost
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">farba</a>
        <a class="dropdown-item" href="#">farba</a>
        <a class="dropdown-item" href="#">farba</a>
    </div>
    <div class="row">
        <div class="col-md-6 mt-2">
            <div class="form-label-group">
                <input class="form-control" placeholder="Cena od" required autofocus>
            </div>
        </div>
        <div class="col-md-6 mt-2">
            <div class="form-label-group">
                <input class="form-control" placeholder="Cena do" required autofocus>
            </div>
        </div>
    </div>

    <div class="ponuka mt-5">
        <div class="container">
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




            <div class="container">
                <div class="row">
                    <div class="col-3 stranky">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
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
