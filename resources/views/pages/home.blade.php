@extends('layout.app')

{{-- Head | title --}}
@section('title')
    Laravel Comics | Comic
@endsection

{{-- body content --}}
@section('content')
    <div class="container d-flex flex-wrap">

        {{-- cards --}}
        @foreach ($movies as $movie)    
            <div class="card" style="width: 18rem;">
    
                {{-- img --}}
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
    
                {{-- card-body --}}
                <div class="card-body">
    
                    {{-- title --}}
                    <h5 class="card-title">
                        {{ $movie['title']}}
                    </h5>
    
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection