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
                        @foreach($poster as $pos)
                        @if($pos->ev_id == $ev->id)
                        <img class="rounded" src="images/events/{{$pos->img_name}}" width="210px" height="118px">
                        @break @endif
                        @endforeach
                        <h5 class="mt-3 text-dark">{{$ev->name}}</h5>
                        <p style="height: 42px;" class="text-secondary">
                            {{substr($ev->details,0,40)}}...</p>
                        <hr>
                        <p><p class=" small text-dark">{{$ev->type}}</p></p>

                        @if($ev->isFree == 'no')
                        <h6 class="text-danger font-weight-bold">${{$ev->per_hour}} /  hr</h6 >
                        <h6  class="text-danger font-weight-bold">${{$ev->per_day}} /  day</h6 >
                        @else
                        <h6 class="text-danger font-weight-bold">Free</h6> @endif
                    </div> </a>
                    
                </div>
                @endforeach

            </div>


            <div class="clear"></div>
        </div>


@endsection



