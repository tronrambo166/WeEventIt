@extends('layout')

@section('page')
        <div class="container-fluid mx-0" id="" style="background:black;">
        
          
        <div class="heading" style="background:black;"> 
                    

                    <div class="home_bg">
                        <div class="row">
                        <div class="col-sm-2"></div>

                        <div class="col-sm-8 mt-5 image">
                        <form action="search" method="get" class=" w-100">
                            <div style="background:black;" class="row py-4 px-5 rounded text-center">
                            <div class="col-sm-5"><input id="searchbox" required="" onkeyup="suggest(this.value);" style="height: 42px;" class=" form-control d-inline" type="text" name="search" value="" placeholder="Enter a location..."></div>

                            <div class="col-sm-4"><div class="dropdown">
                          <button class="w-100 py-2 btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Add a service
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p class="dropdown-item" ><input type="checkbox"  name="services[]" value="Catering"> Catering</p>
                            <p class="dropdown-item" ><input type="checkbox"  name="services[]" value="Clowns"> Clowns</p>
                            <p class="dropdown-item" ><input type="checkbox"  name="services[]" value="Dancers"> Dancers</p>
                          </div>
                        </div></div>

                            <div class="col-sm-2">
                                <button style="width: 40px;height: 40px;" class="bg-danger rounded-circle" type="submit"><i class="fas text-light fa-search"></i></button>
                            </div>

                            </div>


                            <div class="row" style="">
                                <div id="result_list" class="" style="width:41%; z-index: 1000;height: 600px;position: absolute;">
                                    
                                </div>
                            </div>
  
                        </form>
                        </div>

                        <div class="col-sm-2"></div>

                        </div>

                        
                    </div>

                    <div class="w-75 mx-auto">
                        <div>
                         <h3 class="how py-4 font-weight-bold text-center text-light">How It Works</h3> </a> 
                         </div>

                     <div class="row mx-auto">
                        <div class="col-sm-4">
                           <div class="text-center py-3 border border-danger rounded" >
                            <i aria-hidden="true" class="fas fa-3x text-light fa-search-location"></i>
                            <h4 class="pt-2 text-center text-light">Enter your location</h4>
                           </div> 
                            
                        </div>

                        <div class="col-sm-4">
                           <div class="text-center py-3  border border-danger rounded">
                            <i aria-hidden="true" class="fas fa-3x text-light fa-chalkboard-teacher"></i>
                            <h4 class=" pt-2 text-center text-light">Search For
                            the Service You Want</h4>
                           </div> 
                            
                        </div>

                        <div class="col-sm-4">
                           <div class="text-center py-3  border border-danger rounded">
                            <i aria-hidden="true" class="fas fa-3x text-light fa-grin-stars"></i>
                            <h4 class="pt-2 text-center text-light">Book and Enjoy
                            Your Event</h4>
                           </div> 
                            
                        </div>

                        </div>
                        </div>


                </div>

      
               </div>
@endsection


@section('title')
   Home

@endsection
