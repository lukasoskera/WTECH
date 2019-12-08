<!doctype HTML>

<HTML>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/32a3bde05d.js" crossorigin="anonymous"></script>
    <link href="{{asset('styles/ShoppingCart.css')}}" rel="stylesheet">
    <title>ShoppingCart</title>
</head>

<body>
<header class="header py-3">
    <div class="row ">
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
    </div>
</header>



<div class="container mobil">
    <div class="row h-100">
        <div class="col-2 pl-0 pr-0 my-auto">
            <a href="" class="btn btn-outline-light btn-round btn-sm ml-2"> &#60;</a>
        </div>
        <div class="col-8 text-center my-auto">
            <h4 class="mb-0" style="color:aliceblue">Nákupný košík</h4>
        </div>
        <div class="col-2 pl-0 pr-0">

        </div>
    </div>
</div>
<hr class="clearfix w-100 pb-3 mt-0 mb-0">



@if (session()->has('success_message'))
    <div class="alert alert-success">
        {{session()->get('success_message')}}
    </div>
@endif

@if(count($errors)>0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Cart::count()>0)

<h2 class="text-center kosik">Nákupný košík</h2>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table text-center bd-1 border bodrer-dark">
                <thead class="thead-dark">
                <tr>
                    <th scope="col" width="30"></th>
                    <th class="kosik" scope="col" width="92"></th>
                    <th scope="col">Produkt</th>
                    <th scope="col" width="100">Počet</th>
                    <th scope="col">Cena</th>
                </tr>
                </thead>
                <tbody>

                    @foreach(Cart::content() as $item)
                        <tr>
                            <td align="center">
                                <form action="{{route('destroy',$item->rowId)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit"><i class="fa fa-close" style="color:gray"></i></button>
                                </form>
                            </td>
                            <td class="kosik"><a href="{{route('detail',$item->model->slug)}}"><img src="{{asset('images/'.$item->model->slug.'.jpg')}}" alt="produkt" width="80"></a></td>
                            <td>{{$item->model->name}}</td>
                            <td>
                                <div class="def-number-input number-input safari_only mb-0">
                                    <form action="{{route('store')}}" method="POST">
                                        {{ (csrf_field()) }}
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <input type="hidden" name="name" value="{{$item->name}}">
                                        <input type="hidden" name="price" value="{{$item->price}}">
                                        <button type="submit" class="plus"><i class="fa fa-plus"></i></button>
                                    </form>
                                    <form action="{{route('destroy',$item->rowId)}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit"><i class="fa fa-minus"></i></button>
                                    </form>

{{--                                    <form onchange=""><input class="quantity" data-id:="{{$item->rowId}}" min="0" name="quantity" value="" type="number"></form>--}}

                                </div>
                            </td>
                            <td>{{$item->model->getPrice()}}</td>

                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<hr class="clearfix pb-3 mt-0 ml-3 mr-3 mb-0">

<div class="contaner pb-2">
    <div class="row h-100">
        <div class="col-lg-6 col-md-5 col-xl-6 pl-5 my-auto">
        </div>
        <div class="col-6 col-lg-2 col-md-3 col-xl-2 text-right my-auto">
            <h5>Cena spolu</h5>
        </div>
        <div class="col-5 col-lg-2 col-md-2 col-xl-2 pr-0 text-right my-auto">
            <h5 class="pr-0">{{'€'. number_format(((Cart::subtotal())/100), 2)}}</h5>
        </div>
        <div class="col-1 col-6 col-lg-2 col-md-2 col-xl-2 pr-5  my-auto">
        </div>
    </div>
</div>

<hr class="clearfix pb-3 mt-0 ml-3 mr-3 mb-0">

<div class="container">
    <div class="row h-100">
        <div class="col-sm-7 col-lg-5"></div>
        <div class="col-sm-0 col-lg-2 mb-3 kosik">
            <a width="300" href="" class="btn btn-block btn-secondary btn-lg"> &#60; Späť </a>
        </div>
        <div class="col-lg-5">
            <a width="300" href="{{route('checkout')}}" class="btn btn-block btn-success btn-lg"> &#10003; Pokračuj</a>
        </div>
    </div>
</div>

@else

    <h2 class="text-center kosik">Nákupný košík je prázdny!</h2>

@endif



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
<!--<script src="{{asset('js/app.js')}}"></script>-->
<script>
    (function zmena(){
        const classname = document.querySelectorAll('.quantity')
        Array.from(classname).forEach(function(element){
            element.addEventListener('change',function(){
                const id = element.getAttribute('data-id')
                axios.patch(`/cart/${id}`, {
                    quantity: this.value
                })
                .then(function (response){
                    console.log(response);
                })
                .catch(function (error){
                    console.log(error);
                });
                alert('changed')
            })
        })
    })();
</script>
</body>
</HTML>

@section('extra-js')



@endsection

{{--<script>--}}
{{--    (function zmena(){--}}
{{--        const classname = document.querySelectorAll('.quantity')--}}
{{--        Array.from(classname).forEach(function(element){--}}
{{--            element.addEventListener('change',function(){--}}
{{--                const id = element.getAttribute('data-id')--}}
{{--                axios.patch(`/cart/${id}`, {--}}
{{--                    quantity: this.value--}}
{{--                })--}}
{{--                    .then(function (response){--}}
{{--                        console.log(response);--}}
{{--                    })--}}
{{--                    .catch(function (error){--}}
{{--                        console.log(error);--}}
{{--                    });--}}
{{--            })--}}
{{--        })--}}
{{--    })();--}}
{{--</script>--}}
