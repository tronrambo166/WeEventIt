@extends('layout')

@section('page')
    <div class="container" id="">
        
        <h3 class="text-center font-weight-bold bg-light"><b class="h5 text-success" > {{ Session:: get('success') }}</b> </h3>
        <div class="row pt-4 w-75 m-auto">
           
           <div class="col-sm-12">
               <img src="{{asset('images/events/mombasa.jpg')}}" width="100%" height="400px">
           </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-8"> 
                        <h1 class="text-left how my-5 text-dark font-weight-bold">Event Name: {{$event->name}}</h1>

                        <h5 class="text-secondary my-5">Details: {{$event->details}}</5>
                        <hr>
                        <h6 class="my-5 font-weight-bold text-dark">Address: {{$event->address}}</h6>
                    </div>

                        <div class="col-sm-4">
                        <div id="choose" class="card my-4 p-3">
                         <h4 class="my-4 bg-light py-2">Choose Preference</h4>

                        <a style="cursor:pointer;" onclick="bookForm('daily');" ><h6 class="text-dark font-weight-bold">I want to be billed daily</h6 ></a> 

                        <a href=""><h6 class="text-dark font-weight-bold">I want to be billed hourly</h6 ></a>
                         </div>

                         <div id="booking" class="collapse card my-4 p-3">
                         <h4 class="my-4 bg-light py-2 px-5">Booking</h4>

                        <p><h5 class="text-dark ml-2 font-weight-bold">${{$event->per_day}} / Perday</h5></p> 
                        <input type="hidden" id="per_day" value="{{$event->per_day}}">
                        <a href="" onclick="window.location.reload();"><h6 class="text-dark font-weight-bold">Choose preferences again</h6 ></a>

                        <form action="{{route('booking_request')}}" method="post">@csrf
                        <div class="dropdown show">
                            <a class="btn btn-light dropdown-toggle w-100" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select guests
                            </a>

                         <div class="px-3 dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <p class="font-weight-bold text-dark d-inline"> Adults: 
                        <input name="adults" value="0" class="w-75 d-inline dropdown-item" /> </p>

                        <p class="font-weight-bold text-dark d-inline"> Childs: 
                        <input name="childs" value="0" class="w-75 d-inline dropdown-item" /> </p>

                        <p class="font-weight-bold text-dark d-inline"> Infants: 
                        <input style="padding-left: 14px;" name="infants" value="0" class="w-75 d-inline dropdown-item" /> </p>

                          </div>
                        </div>

                       <p><input name="s_day" class="w-100 rounded mt-4 mb-2 py-2 pl-2 font-weight-bold border border-dark"  type="text" placeholder ="Start Date" id="datepicker" value=""></p>

                       <p><input name="e_day" class="w-100 rounded my-2 py-2 pl-2 font-weight-bold border border-dark"  type="text" placeholder ="End Date" id="datepicker2" value=""></p>


                       <div class="card p-2">
                     <div class="row"><p class="w-75 font-weight-bold">Length (days): </p> 
                      <p id="days" class="font-weight-bold w-25"></p></div>

                      <div class="row"><p class="w-75 font-weight-bold">Price: </p> 
                      <p id="price" class="font-weight-bold w-25"></p></div>

                      <div class="row"><p class="w-75 font-weight-bold">Service Fee: </p> 
                      <p id="s_fee" class="font-weight-bold w-25">$200</p></div>

                      <div  class="row"><p class="w-75 font-weight-bold">Total: </p> 
                      <p id="total_price" class="font-weight-bold w-25"></p></div>
                      <input id="t_price" type="hidden" name="total" value="">
                      

                      <div class="row"><p class="w-75 font-weight-bold">Due Now: </p> 
                      <p id="due" class="font-weight-bold w-25"></p></div>
                       </div>

                        <button type="submit" class="py-2 w-100 btn-success rounded text-center font-weight-bold">Send Request Booking</button>


                        </form>

                       </div>


                      
                         </div>

                         </div>
                    </div>
                  
                    
                </div>
                

            </div>


            <div class="clear"></div>
        </div>

  <script type="text/javascript">
  
    function bookForm(shift) {
      $('#choose').hide();
      $('#booking').show();
    }
  </script>

@endsection



