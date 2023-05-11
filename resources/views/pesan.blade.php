    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{asset('assets/css/psn.css')}}">
        <title>Order-Now</title>
    </head>
    <style>

    </style>
    <body>
    {{--button--}}
    <section>
        <div class="justify-content-star" style="margin-top:3%">
            <a href="/send" class="btn btn-outline- bg-warning"><i class="bi bi-cart4"></i></a>
            <a href="/" class="btn btn-outline- bg-danger "><i class="bi bi-arrow-left" style="right: 20px" ></i></a>
        </div>
    </section>
    {{--end button--}}

    {{--card--}}
    <div class="container">
        <div class="header">
            <h1>Product</h1>
        </div>
        <div class="products">
            <div class="product">
                <div class="image">
                    <img src="{{asset('assets/img/bs.png')}}" alt="" width="240px">
                </div>
                <div class="nameprice">
                    <h3>Bakso</h3>
                    <span>10.000</span>
                </div>
                <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="bay">
                    <button>order </button>
                </div>
            </div>
            <div class="product">
                <div class="image">
                    <img src="{{asset('assets/img/baso.png')}}" alt="" width="240px">
                </div>
                <div class="nameprice">
                    <h3>Baso aci</h3>
                    <span>10.000</span>
                </div>
                <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="bay">
                    <button>order </button>
                </div>
            </div>
            <div class="product">
                <div class="image">
                    <img src="{{asset('assets/img/coklat.png')}}" alt="" width="240px">
                </div>
                <div class="nameprice">
                    <h3>Coklat</h3>
                    <span>10.000</span>
                </div>
                <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="bay">
                    <button>order </button>
                </div>
            </div>
            <div class="product">
                <div class="image">
                    <img src="{{asset('assets/img/mie.png')}}" alt="" width="240px">
                </div>
                <div class="nameprice">
                    <h3>Mie Ayam</h3>
                    <span>10.000</span>
                </div>
                <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="bay">
                    <button>order </button>
                </div>
            </div>
            <div class="product">
                <div class="image">
                    <img src="{{asset('assets/img/es.png')}}" alt="" width="240px">
                </div>
                <div class="nameprice">
                    <h3>Es Cream vanila</h3>
                    <span>10.000</span>
                </div>
                <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="bay">
                    <button>order </button>
                </div>
            </div>
            <div class="product">
                <div class="image">
                    <img src="{{asset('assets/img/sosu.png')}}" alt="">
                </div>
                <div class="nameprice">
                    <h3>Soda Susu</h3>
                    <span>10.000</span>
                </div>
                <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
                <div class="bay">
                    <button>order </button>
                </div>
            </div>
        </div>
    </div>
    {{--end card--}}

        <script src="js/all.min.js"></script>
    </body>
    </html>
    