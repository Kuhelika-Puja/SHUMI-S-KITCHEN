<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('metatag')
    <meta name="title" content="renebd.com">
    <meta name="description" content="renebd.com">
    <meta name="keywords" content="renebd">
    <meta property="og:image" content="" />
    
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="10 days">
    <meta name="author" content="renebd.com">
    <link rel="icon" href="{{url('frontend/logo/logo.png')}}" sizes="16x16" type="image/png">
    <link rel="icon" href="{{url('frontend/logo/logo.png')}}" sizes="16x16" type="image/png">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{url('frontend/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}">
    @yield('style')
    <title>Shumi's Kitchen
    @yield('page-title')</title>
  </head>
  <body>
    <header class="sticky-menu" id="">
      <div class="header-top py-4">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-center">
                <img src="{{url('frontend/logo/logo.png')}}" style="height: 80px;" >
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-4" id="stickyMenu">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto mx-auto">
              <li class="nav-item">
                <a class="nav-link custom-nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link custom-nav-link" href="{{url('/about-us')}}">company owner</a>
              </li>
              
              {{-- <li class="nav-item">
              <a class="nav-link custom-nav-link" href="{{url('/illustration-work')}}">ILLUSTRATION WORK</a>
              </li> --}}
              
              <!--<li class="nav-item">-->
              <!--  <a class="nav-link custom-nav-link" href="{{url('/papercut-commissions')}}">PAPERCUT COMMISSIONS</a>-->
              <!--</li>-->
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle custom-nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Shop
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <?php
                  $shop_category = DB::table('product_categories')->get();
                  if(isset($shop_category) && !empty($shop_category)){
                  foreach($shop_category as $scat){
                  ?>
                  <a class="dropdown-item" href="{{url('shop/category',$scat->id)}}">{{$scat->category}}</a>
                  <?php } } ?>
                </div>
              </li>
              
              <li class="nav-item">
                <a class="nav-link custom-nav-link" href="{{url('/blog')}}">Recipe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link custom-nav-link" href="{{url('/publication')}}">Publication</a>
              </li>

              <li class="nav-item">
                <a class="nav-link custom-nav-link" href="{{ url('/award') }}">Awards</a>
              </li>

              <li class="nav-item">
                <a class="nav-link custom-nav-link" href="{{url('/contact')}}">CONTACT</a>
              </li>
              
              <!-- Megamenu-->
              <!-- Megamenu-->
            </ul>
            <ul class="nav navbar-nav mr-auto">
              @guest

              <li class="nav-item"><a href="{{url('login')}}" class="nav-link custom-nav-link shoping-cart-nav-link" ><i class="fas fa-user"></i></a></li>

              

              @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->f_name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('/dashboard')}}">Dashboard</a>
                  <a class="dropdown-item" href="{{url('/profile')}}">Profile</a>
                  <a class="dropdown-item" href="{{url('/orders')}}">Orders</a>
                  
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
              @endguest
              <li class="nav-item"><a href="{{url('shoping-cart')}}" class="nav-link custom-nav-link shoping-cart-nav-link"><i class="fas fa-shopping-cart"></i> <span id="getCart"></span></a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    @yield('page-content')
    <footer>
      <div class="container common-padding">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="subcription text-center">
              <h3>SUBSCRIBE</h3>
              <p>Sign up with your email address to receive news and updates.</p>
            </div>
            <br>
            <form action="{{ route('subscribe.store') }}" method="POST">
              @csrf
              <div class="subcription-plan text-center justify-content-center">
                <div class="form-inline justify-content-center">
                  <div class="form-group mx-sm-3 mb-2">
                    <input type="email" class="form-control custom-form-control" id="email" name="email" placeholder="Email Address" required>
                  </div>
                  <button type="submit" class="btn btn-outline-secondary custom-btn-connect-sm  mb-2">SIGN UP</button>
                </div>
              </div>
            </form>
            <div class="social-icon text-center">
              <a href="" style="color: #da0606; margin-bottom:0px">
                <p>+8801711033357   +8801677171379</p><p></p>
              </a>
              <a href="https://www.facebook.com/shumiskitchen"> 
                <i class="fab fa-facebook facebook"></i>
              </a>
              <a href="https://www.youtube.com/c/AfrozaNazninShumiShumisKitchen" style="color: #FF0000;">
                <i class="fab fa-youtube youtube"></i>
              </a>
              <a href="https://www.linkedin.com/in/afroza-naznin-shumi-1b54621a8" style="color: #0072b1;">
                <i class="fab fa-linkedin linkedin"></i>
              </a>
              <a href="www.afrozanaznin.com" style="color: #0072b1;">
                <i class="fab fa-edge edge"></i>
              </a>
             
            </div>
          </div>
        </div>
      </div>
      <div class="container mb-5 mt-3">
        <div class="row justify-content-center">
      
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-4" id="stickyMenu">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto mx-auto">
              <li class="nav-item">
                <a class="nav-link custom-nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link custom-nav-link" href="{{url('/about-us')}}">ABOUT</a>
              </li>
              <!--<li class="nav-item">-->
              <!--  <a class="nav-link custom-nav-link" href="{{url('/illustration-work')}}">ILLUSTRATION WORK</a>-->
              <!--</li>-->
              
              <!--<li class="nav-item">-->
              <!--  <a class="nav-link custom-nav-link" href="{{url('/papercut-commissions')}}">PAPERCUT COMMISSIONS</a>-->
              <!--</li>-->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle custom-nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Shop
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <?php
                  $shop_category = DB::table('product_categories')->get();
                  if(isset($shop_category) && !empty($shop_category)){
                  foreach($shop_category as $scat){
                  ?>
                  <a class="dropdown-item" href="{{url('shop/category',$scat->id)}}">{{$scat->category}}</a>
                  <?php } } ?>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link custom-nav-link" href="{{url('/blog')}}">BLOG</a>
              </li>

              <li class="nav-item">
                <a class="nav-link custom-nav-link" href="{{url('/')}}">STOCKISTS</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle custom-nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  More
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="nav-link custom-nav-link" href="https://instagram.com/rene_bangladesh?igshid=1cl0s0mhejuk8">INSTAGRAM</a>
                  <a class="nav-link custom-nav-link" href="{{url('/customer-info-wholesale')}}">STOCKISTS  CUSTOMER INFO & WHOLESALE</a>
                  <a class="nav-link custom-nav-link" href="{{url('/')}}">PRIVACY POLICY</a>
                  <a class="nav-link custom-nav-link" href="{{url('/contact')}}">CONTACT</a>
                </div>
              </li>
              
              
              <!-- Megamenu-->
              <!-- Megamenu-->
            </ul>
          </div>
        </nav>
      </div>
    </footer>
    <div class="footer-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="mp-0">Copyright By Women in Digital</div>
          </div>
          <div class="col-md-6">
            <p class="float-right mp-0">Design And Developed By <a href="http://womenindigital.net/" target="_blank" style="color: #de3839 !important;">Women In Digital</a> | <a href="http://luminadev.com/" target="_blank" style="color: #ffb317 !important;">Lumina Dev</a> </p>
          </div>
        </div>
      </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <div id="showAddToCardMessage"></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('frontend/js/popper.min.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="{{url('frontend/js/jquery.lazy.min.js')}}"></script>
    <script>
    $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
    </script>
    <script>
    $(window).on('load', function () {
    $('#preloader-active').delay(450).fadeOut('slow');
    $('body').delay(450).css({
    'overflow': 'visible'
    });
    });
    </script>
    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    } else {
    mybutton.style.display = "none";
    }
    }
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    </script>
    <script>
    $(window).scroll(function () {
    if($(window).scrollTop() > 420) {
    $("#stickyMenu").addClass('sticky');
    } else {
    $("#stickyMenu").removeClass('sticky');
    }
    });
    </script>
    <script>
    $(function() {
    $('.lazy').lazy({
    effect: "fadeIn",
    effectTime: 2000,
    threshold: 0
    });
    });
    </script>

<script>
  $(document).ready(function(){
    
    $('.removeCart').on('click',function(){
      var id = $(this).data('id');
      if(id){
        $.ajax({
          url:"{{url('remove/cart')}}/"+id,
          type:"GET",
          dataType:"json",
          success:function(data){
            getCart();
            showCartData();
          }
        })
      }
    });
    
    $('.updateQuentity').on('click',function(){
      
      var newQty = $(this).val();
      var rowID = $(this).data('id');

        $.ajax({
          data:'rowID=' + rowID + '&newQty=' + newQty,
          url:"{{url('update/cart')}}/",
          type:"GET",
          dataType:"json",
          success:function(data){
            getCart();
            showCartData();
          }
        })
      
    });
  

  function getCart(){
    setTimeout(function () {
      $.ajax({
          url:'{{url('get-cart')}}',
          type:'GET',
          success:function(data){
            $('#showAddToCardMessage').html();
              $('#getCart').html(data);
              showCartData();
          },
      });
      }, 1101);
  
  }


  getCart();


  function showCartData(){
    $.ajax({
          url:'{{url('get-cart-data')}}',
          type:'GET',
          success:function(data){
              $('#cartLists').html(data);
              $('.spinner').hide();
          }
      });
  }


  showCartData();


  $('.addtocart').on('click',function(){
      var id = $(this).data('id');
      var addToMsg;
      // alert(id);
      if(id){
        $.ajax({
          url:"{{url('add/cart')}}/"+id,
          type:"GET",
          dataType:"json",

          success:function(data){
            getCart();
           
            $('#showAddToCardMessage').html("<div class='alert alert-success alert-dismissible fade show'<strong>Successfully Added</strong><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
            
           
          },
        })

      }
    })


  });
</script>

    @yield('scripts')
    {{-- gwriwghorgfiow --}}
  </body>
</html>