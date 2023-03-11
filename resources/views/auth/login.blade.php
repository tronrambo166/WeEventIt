@extends('../layout')

@section('page')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
               
                </div>
            </div>
        </div>
    </div>
</div>



 <div class="card" id="all_logins">

     <div class=" my-3 text-center User-Artist-Select">
            <div class="col-md-5"></div>                
            <button  id="art_log" onclick="artist_log()" class="w-25 btn btn-success px-3 mr-2">{{ __('Artist') }}</button>
            <button  id="usr_log"onclick="user_log()" class="w-25 btn btn-light px-3 mr-2">{{ __('User') }}</button>
                                          </div>

 <div id="artist_log" class="card-body text-center py-0">

     <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{route('forgot','email')}}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                    
                    @if(Session::has('reset'))<p class="text-light font-weight-bold">{{Session::get('reset')}}   @php Session::forget('reset'); @endphp </p>@endif
                    

                   @if(Session::has('login_err'))
                   <div class="alert alert-danger" role="alert">
                                  <p class="">{{Session::get('login_err')}}   @php Session::forget('login_err'); @endphp </p> 

                                 </div>  @endif
                   
                        
                       <hr>  <div class="row">
                              <div class="col-sm-12 pr-1">
                    <a href="{{ route('forgot','email') }}" class=" text-responsive font-weight-bold text-info mx-auto my-2 d-inline-block py-0 small">Forgot Password?</a>
                    </div>
                  
                    
                    </div>
                    

                </div>




  <!-- HIDDEN USER LOG -->
<div id="user_log" class="collapse card-body text-center py-0">

                      <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>

                            
                        </div>
                    </form>
                    
                    @if(Session::has('reset'))<p class="text-light font-weight-bold">{{Session::get('reset')}}  </p>
                      @php Session::forget('reset'); @endphp @endif
                    

                   @if(Session::has('login_err'))
                    <p class="text-danger ">{{Session::get('login_err')}}</p>@php Session::forget('login_err'); 
                    @endphp @endif
                        
                     <hr>   <div class="row">
                              <div class="col-sm-12 pr-1">
                    <a href="{{ route('forgot','email') }}" class=" text-responsive font-weight-bold text-info mx-auto my-2 d-inline-block py-0 small">Forgot Password?</a>
                    </div>
                  
                    
                    </div>

                </div>

            </div>



            <script type="text/javascript">
    $('#login').css('border-bottom', '2px solid red');
    $('#business_reg').hide();
    
    function login(){
    $('#register').css('border-bottom', 'none');    
    $('#login').css('border-bottom', '2px solid red');

    $('#all_logins').show();

    }

     function register(){ 
    $('#login').css('border-bottom', 'none');
    $('#register').css('border-bottom', '2px solid red');

   $('#all_logins').hide();
    $('#all_registers').show();
    
    }


</script>


<script type="text/javascript">
    function user_log(){
    $('#art_log').removeClass('btn-success');
    $('#usr_log').removeClass('btn-light');
    $('#usr_log').addClass('btn-success');

    $('#user_log').show();
    $('#artist_log').hide();
    }

     function artist_log(){ 
    $('#usr_log').removeClass('btn-success');
    $('#art_log').removeClass('btn-light');
    $('#art_log').addClass('btn-success');

    $('#artist_log').show();
    $('#user_log').hide();
    
    }


</script>


@endsection
