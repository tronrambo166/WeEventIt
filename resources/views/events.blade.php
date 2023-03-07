@extends('layout')

@section('page')
    <div class="container" id="">
        
         
        <div class="heading">
                    <h3 class="my-4 bg-light text-center text-dark">Catering...</h3> 
                </div>
                <h3 class="text-center font-weight-bold bg-light"><b class="h5 text-success" > {{ Session:: get('success') }}</b> </h3>
        <div class="row pt-4 w-75 m-auto">
           

            @foreach($events as $ev)
                <div class="col-sm-4">
                   <a href="{{route('event',$ev->id)}}">
                    <div class="listing" style="width:75%;">
                        <img class="rounded" src="images/events/mombasa.jpg" width="210px">
                        <h5 class="mt-3 text-dark">{{$ev->name}}</h5>
                        <p class="text-secondary">{{$ev->details}}</p>
                        <hr>
                        <p><p class=" small text-dark">{{$ev->type}}</p></p>

                        <h5 class="text-danger font-weight-bold">{{$ev->per_hour}}/per hr</h5 >
                        <h5  class="text-danger font-weight-bold">{{$ev->per_day}}/per day</h5 >
                    </div> </a>
                    
                </div>
                @endforeach

            </div>


            <div class="clear"></div>
        </div>


@endsection



