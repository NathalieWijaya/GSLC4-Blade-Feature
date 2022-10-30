@extends('template')

@section('title', 'JustBuyIt')

@section('content')

<h2 class="text-center">Welcome</h2>
<h4 class="text-center font-weight-light">Buy now or cry later</h4>
<div class="row mt-4">
    @foreach($cloth as $c)
      <div class="col-md-3 mt-4">
        <div class="card bg-light" style="height:100%;">
            <img src="{{ $c['image'] }}" class="card-img-top" alt="Image"> 
            <div class="card-body" >
              <p class="card-text text-black">{{ $c['name']}}</p>
              <p class="card-text text-black">{{ $c['price']}}</p>
              @if($c['gender'] == "Wanita")
                <div class="alert alert-danger pl-2 pr-2 pb-1 pt-1 mb-0" style="width:fit-content; font-size:12px;">
                    Wanita
                </div>
              @else
                <div class="alert alert-primary pl-2 pr-2 pb-1 pt-1 mb-0" style="width:fit-content; font-size:12px;">
                    Pria
                </div>
              @endif
            </div>
        </div>
      </div>
    @endforeach
</div>
    
@endsection


