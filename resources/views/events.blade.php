@extends('layout')

@section('page')
    <div class="container" id="">
        
         
        <div class="heading">
                    <h5 class="mb-5 bg-light text-center text-dark">Catering</h5> 
                </div>
                <h3 class="text-center font-weight-bold bg-light"><b class="h5 text-success" > {{ Session:: get('success') }}</b> </h3>
        <div class="row pt-4">
           

            @foreach($events as $ev)
                <div class="col-sm-4">
                   <a href=""> <div class="listing text-center">
                        <img src="images/background.jpg" width="200px">
                        <h5 class="text-center">{{$ev->name}}</h5>
                        <p class="text-dark">{{$ev->details}}</p>
                        <hr>
                        <p><p class=" small text-secondary">{{$ev->type}}</p></p>

                        <p class="text-danger font-weight-bold">{{$ev->per_hour}}/per hr</p>
                        <p class="text-danger font-weight-bold">{{$ev->per_day}}/per hr</p>
                    </div> </a>
                    
                </div>
                @endforeach

            </div>


            <div class="clear"></div>
        </div>


@endsection



