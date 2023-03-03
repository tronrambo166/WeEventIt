

<!DOCTYPE HTML>
<head>
    <title>We Event It</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 
    <link href="{{ asset('/css/menu.css') }}" rel="stylesheet" type="text/css" media="all"/>
    
    
    
    
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>

   <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>

    
<!-- {{-- Vue component files --}}
<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/http-vue-loader"></script>
  {{-- Vue component files --}} -->
  
</head>
<body>

     

<div class="app container-fluid"  >
    
 
    
    <div class="row px-0 " style="background: black;">
    
     <div class="col-sm-4">
      <a href="home"><img class="" src="images/we-event-it-white-web-logo-v2.png" width="216px" height="50px" style="margin-left: 130px;"></a>
     </div>

    
    
    <div class="col-sm-8  ">
   <div class="navbar navbar-expand-sm p-0 navy float-right ">
       <ul class="navbar-nav">
                    <li class="nav-item py-1 px-3 text-light  "><router-link to="/home" class="text-light nav-link">Create service</router-link></li>

                    <li class="nav-item py-1 px-3 text-light"><router-link to="/products" class="text-light nav-link">Create event
                    </router-link></li>

                    <li class="nav-item py-1 px-3 text-light "><router-link to="/cart" class="text-light nav-link">events</router-link></li>


                    <li class="nav-item py-1 px-3 text-light "><router-link to="contacts" class="text-light nav-link">Profile</router-link></li>

                    <li class="nav-item py-1 px-3 text-light ">
                        @guest
    @if (Route::has('login'))

     <a class=" d-inline my-0 h5 bg-light mt-2 d-inline-block text-center" href="{{ route('login') }}" ><b>Log In</b></a> @endif

     @else
     {{-- <a class="w-100 my-0 h5 text-info mt-2 d-inline-block text-center" href="{{url('profile/'.$user_id)}}">
        <b>Profile</b></a>  --}}

         <div class="text-center w-50 d-inline">  
            <a class="text-center w-50 d-inline" href="route('logout')" 
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
            </a> </div>
        <form  class="d-inline" method="POST" action="{{ route('logout') }}">
                                                                 @csrf</form>
                    
        @endguest
                    </li>

                </ul>
                </div>

        @php use App\Models\Cart; $cart=Cart::get(); $carts=count($cart); @endphp
        @auth
        @php
        $user_id=Auth::user()->id; @endphp
          @endauth
        
        
        
    
        
        </div>
        
        
        
        
    </div>
    

    <div class="row"> 
    <router-view></router-view>
     </div>

    
    </div>
 
    




   <!-- @yield('page') -->
<div class="clearfix py-5 extraDiv"></div>
<div class="clearfix py-5 extraDiv"></div>

<div class="container-fluid extraDiv mt-5 fixed-bottom">
        <div class="container">
        <footer>
            <div class="row py-2">
                <div class="col-sm-2"> </div>

                 <div class="col-sm-3">
                    
                    <p class="text-light py-2">Copyright © 2023 WEEVENTIT.com
                    </p>
                </div>

             <div class="col-sm-5 ">
              <div class="navbar navbar-expand-sm p-0 float-right">      
                <ul class="navbar-nav text-light how">
                            <li><a class="text-light" href="https://test.weeventit.com/how-it-works/" target="_blank">Support</a></li>
                            <li><a class="text-light" href="https://test.weeventit.com/terms-and-conditions/" target="_blank">Terms &amp; Conditions</a></li>
                            <li><a class="text-light" href="https://test.weeventit.com/privacy-policy/" target="_blank"> Privacy Policy</a></li>
                            <li><a class="text-light" href="https://test.weeventit.com/how-it-works/" target="_blank"> Contact Us</a></li>
                            
                        </ul>
                         </div>
                        </div>
                  <div class="col-sm-2"> </div>
                
            </div>
        </footer>
       
        </div>
        
        
    </div>
    
    
    



 <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
       

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
<script type="text/javascript" src="js/app.js"></script>
 <!-- {{-- Vue files --}}
 <script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>  
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js"></script>

<script type="text/javascript" src="js/vue-router.js"></script>
<script type="text/javascript" src="js/routerCode.js"></script>
{{-- Vue files --}}  -->

<script type="text/javascript">
    
</script>



</body>
</html>