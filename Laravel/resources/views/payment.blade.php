
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
<title>Payment&delivery</title>
</head>

<body>
<header class="header py-3 mb-2 kosik">
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

<div class="container mobil">
    <div class="row">
        <div id="volba" class="col-3 text-center">
            <a href="" class="btn btn-outline-dark btn-round btn-sm ml-2"> &#60;</a>
        </div>
        <div id="volba" class="col-6 text-center">
            <a href="{{route('home')}}"><img class="logo" src="{{asset('images/logo.png')}}" alt="logo"></a>
        </div>
        <div id="volba" class="col-3 text-center">
        </div>
    </div>
</div>

<hr class="clearfix w-100 pb-3 mt-0 mb-0">

<body>
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <a width="300" href="" class="btn btn-block btn-secondary btn-lg"> Prihlás sa </a>
                    <ul class="list-unstyled text-center mb-0 mt-2">
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
                    <div class="container mt-2">
                        <div class="row">
                            <div class="col-6 text-right pr-1">
                                <label>Nemáš účet?</label>
                            </div>
                            <div class="col-6 text-left pl-1">
                                <a href=""><u>Zaregistruj sa</u></a>
                            </div>
                        </div>
                    </div>
                    <hr class="my-3">
                    <form class="form-signin">
                        <h5 class="mb-4 text-center"> Vyber spôsob platby</h5>
                        <button class="btn btn-light w-100 dropdown-toggle mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Spôsob platby
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">VISA</a>
                            <a class="dropdown-item" href="#">MasterCard</a>
                            <a class="dropdown-item" href="#">Paypal</a>
                            <a class="dropdown-item" href="#">Pri prevzatí</a>
                        </div>

                        <hr class="my-4">
                        <h5 class="mb-4 text-center"> Vyber spôsob dopravy</h5>
                        <div class="multi form-check border rounded mb-3">
                            <input class="ml-1 form-check-input" type="radio" value="option1" unchecked>
                            <label class="ml-4 form-check-label">
                                Slovenská pošta
                            </label>
                        </div>
                        <div class="multi form-check border rounded mb-3">
                            <input class="ml-1 form-check-input" type="radio" value="option2" unchecked>
                            <label class="ml-4 form-check-label">
                                Osobné prevzatie
                            </label>
                        </div>
                        <div class="multi form-check border rounded mb-3">
                            <input class="ml-1 form-check-input" type="radio" value="option3" unchecked>
                            <label class="ml-4 form-check-label">
                                Balíkomat
                            </label>
                        </div>
                        <div class="multi form-check border rounded mb-3">
                            <input class="ml-1 form-check-input" type="radio" value="option4" unchecked>
                            <label class="ml-4 form-check-label">
                                Kuriér
                            </label>
                        </div>

                        <hr class="my-4">

                        <a width="300" href="" class="btn btn-block btn-secondary btn-lg kosik"> &#60; Späť </a>
                        <a width="300" href="" class="btn btn-block btn-success btn-lg"> &#10003; Pokracuj</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
