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
    <title>CustomerInfo</title>
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
                    <h4 class="card-title text-center">Informácie o doručení</h4>
                    <hr class="my-4">
                    <form  action="{{route('placeOrder')}}" method="post">
                        {{ csrf_field() }}
                        <h5 class="mb-4"> Osobné údaje</h5>
                        <input type="fulnam" name="fullname" id="inputFulnam" class="form-control mb-3" placeholder="Meno a priezvisko" required autofocus>
                        <input type="email" name="mail" id="inputEmail" class="form-control mb-3" placeholder="E-mail" required>
                        <input type="phonum" name="phone" id="inputPhonum" class="form-control mb-3" placeholder="Telefónne číslo" required>

                        <hr class="my-4">
                        <h5 class="mb-4">Adresa doručenia</h5>
                        <input type="fullname" id="inputFulnam"  name="street" class="form-control mb-3" placeholder="Ulica" required autofocus>
                        <div class="container">
                            <div class="row">
                                <div class="col-7 my-auto pl-0">
                                    <input type="num" id="inputNum" name="streetnum" class="form-control mb-3" placeholder="Číslo" required>
                                </div>
                                <div class="col-5 my-auto pr-0  ">
                                    <input type="postalcode" id="inputPostal" name="postal" class="form-control mb-3" placeholder="PSČ" required>
                                </div>
                            </div>
                        </div>
                        <input type="city" id="inputCity" name="city" class="form-control mb-3" placeholder="Mesto" required>
                        <input type="country" id="inputCountry" name="state" class="form-control mb-3" placeholder="Krajina" required>

                        <hr class="my-4">

                        <a width="300" href="" class="btn btn-block btn-secondary btn-lg kosik"> &#60; Späť </a>
                        <input type="submit"
                               class="btn btn-success btn-lg btn-block"
                               value="&#10003; Pokračuj"/>

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
