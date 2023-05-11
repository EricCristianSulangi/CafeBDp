<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets/css/wlc.css')}}">
</head>
<style>
   
</style>
<body>
  <section style="background: linear-gradient(40deg,  #2E4F4F 0%, #0E8388  60%) ;">
  {{--Navbar--}}
    <nav class="navbar  navbar-light navbar-expand-lg bg-light ">
     <div class="container"> 
       <div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarSupportedContent">
           <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" style="Font-size:17px;">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active" href="#" aria-current="page"  style="Font-size:17px;">SHOP</a></li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"  style="Font-size:17px;">CONTACT</a>
            </li>
          </ul>
       </div>
      </div>
    </nav>
  {{--End Navbar --}}

  {{--Card--}} 

    <div class="container5">
        <div class="row justify-content-center align-items-center">
            <div class="col-6" style="padding:70px;">
                <h5>Welcome To</h5>
                <h1 style="color: #F49D1A">Cafe Wikrama</h1>
                <h3 style=" color:#">Fresh and</h3>
                <h3 style="color:#">Delicious Food Every Day!</h3><br>
                <a href="/order " style="" class=" 1 btn btn-outline-warning">Order Now</a>
            </div>
            <div class="col-4" >
              <div class="home-img">
                  <img src="{{asset('assets/img/mie.png')}}" alt="" srcset="" width="350">
              </div>
           </div>
          </div>
        </div>
     <br> 
  {{--end card--}}

  <section class="products">
    <div class="d-flex  justify-content-center">
    <h1>Our products</h1>
  </div>
      <div class="all-products">
        <div class="product">                 
           <img src="{{asset('assets/img/mie.png')}}" alt="" srcset="" width="175px">
           <div class="product-info">
            <h4 class="product-title">Mie Ayam</h4>
            <p class="product-price">$1.20</p>
            <a class="product-btn" href="">Buy Now</a>
           </div>
        </div>
        <div class="product">                 
          <img src="{{asset('assets/img/bs.png')}}" alt="" srcset="" width="179px">
          <div class="product-info">
           <h4 class="product-title">Baso</h4>
           <p class="product-price">$1.20</p>
           <a class="product-btn" href="">Buy Now</a>
          </div>
       </div>
       <div class="product">                 
        <img src="{{asset('assets/img/coklat.png')}}" alt="" srcset="" width="180px">
        <div class="product-info">
         <h4 class="product-title">Coklat</h4>
         <p class="product-price">$1.20</p>
         <a class="product-btn" href="">Buy Now</a>
        </div>
     </div>
     <div class="product">                 
      <img src="{{asset('assets/img/es.png')}}" alt="" srcset=""width="175px">
      <div class="product-info">
       <h4 class="product-title">Ice Cream </h4>
       <p class="product-price">$1.20</p>
       <a class="product-btn" href="">Buy Now</a>
      </div>
   </div>
      </div>
  </section>
</section>

  
  {{--kontak--}}
    <footer class="cnt">
      <div class="wrapper d-flex justify-content-center">
       <div class="button">
        <div class="icon">
          <i class="bi bi-messenger"></i>
        </div>
        <span>Messenger</span>
      </div>
      <div class="button">
        <div class="icon">
          <i class="bi bi-instagram"></i>
        </div>
        <span>Instagram</span>
      </div>
      <div class="button">
        <div class="icon">
          <i class="bi bi-whatsapp"></i>
        </div>
        <span>Whatsapp</span>
      </div>
      <div class="button">
        <div class="icon">
          <i class="bi bi-youtube"></i>
        </div>
        <span>Youtube</span>
      </div>
    </div>
  </footer>
  {{--end kontak--}}
</body>
</html>
