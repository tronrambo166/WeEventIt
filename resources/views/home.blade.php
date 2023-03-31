@extends('layout')

@section('page')
        <div class="container-fluid mx-0" id="" style="background:black;">
        
          
        <div class="heading" style="background:black;"> 
                    

                    <div class="home_bg">

                        <div class="row" style="">
                          <div class="px-0 col-sm-1" style="margin-top: 150px;background:black;"> </div>

                        <div class="pr-3 col-sm-10 text-center image" style="    margin-top: 150px; background:black;">
                        <form action="search" method="get" class=" w-100">
                            <div style="background:black;" class="row py-4 px-0 rounded text-center">

                            <div style="    border-radius: 30px 0 0 30px;" class="py-2 col-sm-3 bg-white">
                              <input id="searchbox" required="" onkeyup="suggest(this.value);" style="border: none;height: 42px;" class=" bg-white form-control d-inline" type="text" name="search" value="" placeholder="Enter a location..."></div>

                            <div class="py-2 col-sm-3 bg-white"><div class="dropdown">
                          <button class="w-100 py-2 btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Add a service
                          </button>

                          <div style="height: 300px;margin-top: 305px;overflow-y: scroll;" class="dropdown-menu" aria-labelledby="">


                            

                            <p class="font-italic dropdown-item" > <input type="checkbox" name="services[]" value="bouncing castles">
                         <span class="rz-transition"></span>
                          <em> Bouncing Castles</em> </p>
                                <p class="dropdown-item" > <input type="checkbox" name="services[]" value="catering">
                             <span class="rz-transition"></span>
                              <em>Catering</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="clowns">
 <span class="rz-transition"></span>
  <em>Clowns</em> </p>
                            <p class="dropdown-item" >  <input type="checkbox" name="services[]" value="dancers">
 <span class="rz-transition"></span>
  <em>Dancers</em></p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="deejay">
 <span class="rz-transition"></span>
  <em>Deejay</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="emcee">
 <span class="rz-transition"></span>
  <em>Emcee</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="entertainers">
 <span class="rz-transition"></span>
  <em>Entertainers (singer, comedian, actor, instrumentalist)</em> </p>
                             <p class="dropdown-item" > <input type="checkbox" name="services[]" value="event chairs">
 <span class="rz-transition"></span>
  <em>Event Chairs</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="event licensing">
 <span class="rz-transition"></span>
  <em>Event Licensing</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="face painting">
 <span class="rz-transition"></span>
  <em>Face Painting</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="generators">
 <span class="rz-transition"></span>
  <em>Generators</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="influencer">
 <span class="rz-transition"></span>
  <em>Influencer</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="interior decorations">
 <span class="rz-transition"></span>
  <em>Interior Decorations</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="lighting">
 <span class="rz-transition"></span>
  <em>Lighting</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="location manager">
 <span class="rz-transition"></span>
  <em>Location Manager</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="make up artist">
 <span class="rz-transition"></span>
  <em>Make up artist</em> </p>
                            <p class="dropdown-item" ><input type="checkbox" name="services[]" value="mobile toilets">
 <span class="rz-transition"></span>
  <em>Mobile Toilets</em>  </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="performance stage and rigs">
 <span class="rz-transition"></span>
  <em>Performance Stage &amp; Rigs</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="photography">
 <span class="rz-transition"></span>
  <em>Photography</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="security">
 <span class="rz-transition"></span>
  <em>Security</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="soft drinks">
 <span class="rz-transition"></span>
  <em>Soft Drinks</em> </p>
                             <p class="dropdown-item"> <input type="checkbox" name="services[]" value="sound system">
 <span class="rz-transition"></span>
  <em>Sound System</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="tents">
 <span class="rz-transition"></span>
  <em>Tents</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="venue provider">
 <span class="rz-transition"></span>
  <em>Venue Provider</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="visual display and lighting">
 <span class="rz-transition"></span>
  <em>Visual Display and Lighting</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="visual displays">
 <span class="rz-transition"></span>
  <em>Visual Displays</em> </p>
                            <p class="dropdown-item" > <input type="checkbox" name="services[]" value="wines and spirits">
 <span class="rz-transition"></span>
  <em>Wines and Spirits</em> </p>
                            <p class="dropdown-item" >  </p>


                          </div>
                        </div></div>


                         <div class="py-2 col-sm-3 bg-white">
                           <div class="">
                          <a class="w-100 py-2 pr-1 btn"  onclick="date_div();" >
                           Add Dates  <i class="float-right mt-1 fa fa-angle-down"> </i>
                          </a>


                        </div>

                        <div style="width:250px; position: absolute;" class="px-3 collapse bg-white"
                        id="date_div">
                        <p>
                          <input name="s_day" class="w-100 rounded mt-4 mb-2 py-2 pl-2 font-weight-bold border border-dark"  type="text" placeholder ="Start Date" id="datepickerHome1" value=""></p>

                           <input name="s_day" class="w-100 rounded mt-2 mb-2 py-2 pl-2 font-weight-bold border border-dark"  type="text" placeholder ="End Date" id="datepickerHome2" value=""></p>

                        <hr>

                        <a onclick="close_date();" class="float-right my-2 small btn btn-danger text-light font-weight-bold">Close</a>
                        </div>

                        </div>

                         <div class="py-2 col-sm-2 bg-white">
                          <div class="">
                          <a class="w-100 py-2 pr-1 btn" type="button" id="" onclick="guest_div();"  aria-haspopup="true" aria-expanded="false">
                           Select Guests  <i class="float-right mt-1 fa fa-angle-down"> </i>
                          </a>


                        </div>

                        <div  style="width:250px; position: absolute;" class="px-3 collapse bg-white" id="guest_div">
                        <p class="my-2 font-weight-bold text-dark d-inline"> Adults: 
                        <input type="number" name="adults" value="0" class="my-2 bg-light py-1 pl-1 w-75 d-inline dropdown-item" /> </p>

                        <p class=" font-weight-bold text-dark d-inline"> Childs: 
                        <input type="number" name="childs" value="0" class="my-2 bg-light py-1  pl-1 w-75 d-inline dropdown-item" /> </p>

                        <div class="my-2 row">
                          <div class="col-sm-3 text-left font-weight-bold"> Infants:</div>
                          <div class="col-sm-9" style="padding-left: 9px;"> <p class="font-weight-bold text-dark"> 
                        <input style="margin-top: -3px;" name="infants" value="0" class="bg-light py-1 w-100  dropdown-item" /> </p></div>
                        </div>
                        <hr>
                        <p class="px-3 text-secondary">Select the number of guests, infants don’t count toward the number of guests.</p>

                        <a onclick="close_guest();" class="text-light float-right my-2 small btn btn-danger font-weight-bold">Close</a>
                        

                          </div>

                        </div>






                            <div style="border-radius: 0 30px 30px 0;" class="col-sm-1 bg-white py-2 ">
                                <button style="background: #ee2f31;border: none;width: 40px;height: 40px;" class=" rounded-circle float-right" type="submit"><i class="fas text-light fa-search"></i></button>
                            </div>


                            


                            <div class="row" style="">
                                <div id="result_list" class="text-left" style="display: none;width:41%; z-index: 1000;height: 600px;position: absolute; margin-left: -7px;">
                                    
                                </div>
                            </div>
  
                        </form>
                        </div>

                       

                        </div> <div class="col-sm-1 " style=" margin-top: 150px;background:black;"> </div>

                        
                    </div>  </div>

                    <div class="w-75 mx-auto" style="min-height:320px;">
                        <div>
                         <h3 class="how py-4 font-weight-bold text-center text-light h4 ">How It Works</h3> 
                         </div>

                     <div class="row mx-auto">
                        <div class="col-sm-4">
                           <div class="text-center py-3 borderRed rounded" >
                            <i aria-hidden="true" class="fas fa-3x text-light fa-search-location"></i>
                            <h4 class="h5 pt-2 text-center text-light">Enter your location</h4>
                           </div> 
                            
                        </div>

                        <div class="col-sm-4">
                           <div class="text-center py-3 borderRed rounded">
                            <i aria-hidden="true" class="fas fa-3x text-light fa-chalkboard-teacher"></i>
                            <h4 class="h5 pt-2 text-center text-light">Search For
                            the Service You Want</h4>
                           </div> 
                            
                        </div>

                        <div class="col-sm-4">
                           <div class="text-center py-3  borderRed rounded">
                            <i aria-hidden="true" class="fas fa-3x text-light fa-grin-stars"></i>
                            <h4 class="h5 pt-2 text-center text-light">Book and Enjoy
                            Your Event</h4>
                           </div> 
                            
                        </div>

                        </div>
                        </div>


                </div>

                <script type="text/javascript">
                  function guest_div() {
                    $('#guest_div').show();
                    // body...
                  }

                  function date_div() {
                    $('#date_div').show();
                    // body...
                  }

                  function close_guest() {
                    // body...
                    $('#guest_div').hide();
                  }

                  function close_date() {
                    // body...
                    $('#date_div').hide();
                  }
                </script>


@endsection


@section('title')
   Home

@endsection
