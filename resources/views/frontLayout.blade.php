<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mountcoins</title>
    <!-- <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}"> -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('Bs4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css\frontlayout.css') }}">
    
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Core Stylesheet -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('toastalert.min.css') }}">
    <!-- Favicon -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C9VXHSTBQC"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-C9VXHSTBQC');
    </script>
    
  </head>
  <body style="background-color: ">
    <div id="alert_popover">
    <div class="wrapper">
     <div class="contentreplace">
        
     </div>
    </div>
   </div>

    <div class="loader" style="">
      <div class="overlay__inner">
        <div class="overlay__content"><span class="spinner"></span></div>
      </div>
    </div>

    <header class="header-area shadow-lg" style="background-color: white !important;";>
      
      <!-- Navbar Area -->
      <div class="cryptos-main-menu bg-white" style="width: 100%">
        <div class="classy-nav-container breakpoint-off bg-white">
          <div class="container-fluid" style="padding: 0px;">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="cryptosNav" style="background-color:white !important;">
              <a href="{{url('/')}}" class="logowid">
                
                <!-- <img src="{{ asset('img/Logo final- white back-01.png') }}" class="img-fluid customLogow"> -->
                <img src="{{ asset('logo.jpeg') }}" class="img-fluid customLogow" style="margin-left: 20px">
                
              </a>

              <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
              </div>

              <div class="classy-menu">
                <div class="classycloseIcon">

                  <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <div class="classynav" style="
                  background: white;
                  ">
                  
                          <ul >
                    <li><a href="{{url('/')}}" style="color: black">Home</a></li>
                    
                    
                    <li><a href="{{url('sell')}}"  style="color:black">Sell</a></li>
                    <li><a href="{{url('buy')}}"  style="color:black">Buy</a></li>
                    
                    <!-- <li><a href="{{url('contact')}}" style="color:#BC873C">Contact</a></li> -->
                    @if (Auth::check())
                    
                    
                    <li>
                    <a href="{{ route('my_profile') }}"  style="color:black"> </span>My Account
                    
                  </a>
                </li>
                <li>
                  <a href="javascript:void" onclick="$('#logout-formlogout').submit();" style="color:black"> </span>Logout </a>
                </li>
                <form id="logout-formlogout" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
                @else
                <li><a href="{{url('login')}}"  style="color:black">Login/Register</a></li>
                @endif
                @if (Auth::check())
                <li>
                
                  &nbsp;&nbsp;<span class="badge badge-danger"style="background: #e23737;" id="conternote">0</span>
                 
                  <div class="icon" id="bell"> <img src="{{ asset('AC7dgLA.png') }}" alt="">
                     
                    
                    
                    
                  </div>
                  <div class="notifications" id="box" style="opacity: 1;height: auto; display: none;">
                    <h2>Unread Notifications - <span id="noticount">0</span></h2>
                     
                    <div id="notificationsContent">
                      
                    
                  

                    </div>
                   
                  </div>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>

@yield('content')

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
  <div class="main-footer-area bg-overlay" style="background-color:rgb(34, 39, 41);padding-top: 40px">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="footer-widget">
            <div class="widget-title">
              <h6>ABOUT COMPANY</h6>
            </div>
            <div class="single--blog-post">
              <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          
          <div class="footer-widget mb-100">
            <div class="widget-title">
              <h6>MOST POPULAR TOP PAGES</h6>
            </div>
            <div class="single--blog-post">
              <a href="#">
                <p>Home</p>
              </a>
            </div>
            <div class="single--blog-post">
              <a href="#">
                <p>Sell/Buy</p>
              </a>
            </div>
            <div class="single--blog-post">
              <a href="#">
                <p>Exchange</p>
              </a>
            </div>
            
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          
          <div class="footer-widget mb-100">
            <div class="widget-title">
              <h6>NEWSLETTER</h6>
            </div>
            <div class="single--blog-post">
              <input type="email" name="email" placeholder="Email Address">
              <br><br>
              <input type="submit" value="Subscribe" style="border: 1px solid #BC873C;padding: 5px;background-color: #BC873C !important;color: white">
            </div>
            
          </div>
        </div>
       
       
       
       
          
        </div>
      </div>
    </div>
    
    <div class="bottom-footer-area" style="background-color: rgb(34, 39, 41)">
      <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center ">
          <div class="col-12">
            <p class="text-white">
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Zahid Akbar Jakhar</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ##### Footer Area Start ##### -->
  <!-- ##### All Javascript Script ##### -->
  <!-- jQuery-2.2.4 js -->
  <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
  <!-- Popper js -->
  <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
  <!-- Bootstrap js -->
  <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
  <!-- All Plugins js -->
  <script src="{{ asset('js/plugins/plugins.js') }}"></script>
  <!-- Active js -->
  <script src="{{ asset('js/active.js') }}"></script>
  <script src="{{ asset('toastalert.min.js') }}"></script>
  


















  <script type="text/javascript">

  @if (Auth::check())


 $(document).ready(function(){




toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

 function play() {

   var audio = document.getElementById("audio");
       

$.ajax({

url:"{{ route('getFreshNotification') }}",

type:"POST",

dataType:"json",

data:{user_id:'',_token:"{{ csrf_token() }}"},

success:function(res)

{

  console.log(res);
  let tempn=res.output.map(function(key, index) {
   return` <div class="notifications-item" style="${(key.view_user=='no')? '':'background: aliceblue'}"> 

    <div class="text">
    <p>
   
    New order no ${key.order_number} and Coin ${key.coinType} has been ${key.ordertype} ${(key.view_user=='no')? '<span class="badge bg-danger ms-2 text-white">unread</span>':'<span class="badge bg-success ms-2 text-white ">Read</span>'}

     </p>
    
    </div>
    </div>`;
    });
                   
 
$("#conternote").text(res.count);
$(".conternote").text(res.count);
$("#noticount").text(res.count);
$('#notificationsContent').html(tempn);
if(res.output2.length>0){
  audio.play();
  let objret=res.output2[0];
let descp=`New order no ${objret.order_number} and Coin ${objret.coinType} has been ${objret.ordertype} Please Check Notifications Inbox...!`;
toastr.success(descp,'');
}
  



},

error: function(XMLHttpRequest, textStatus, errorThrown) {

console.log("Status: " + textStatus); console.log("Error: " + errorThrown);console.log("Error: " + errorThrown);

}

});

       
      }
   setInterval(function(){
 play(); 
},7000);
 });
@endif
  $(document).ready(function(){
  var down = false;
  $('#bell').click(function(e){
  var color = $(this).text();
  if(down){
  $('#box').hide();
  down = false;
  }else{
  $('#box').show();
  down = true;
  }
  });

  $('#notificationsContent').click(function(){
window.location.href='/notification/inbox';

  })
  });

  $(document).ready(function() {
  $(".loader").fadeOut(3000);
  });
  </script>















    
  @yield('footer')
</body>
</html>