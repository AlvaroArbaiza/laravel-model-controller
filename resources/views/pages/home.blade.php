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

            <div class="card p-2 border-danger border-2">
    
                <!-- Card Body -->
                <div class="card-body">                
                
                    <!-- Titolo -->
                    <h5 class="card-title">
                        <span class="opacity-100 text-uppercase fs-6">Titolo: </span>
                        <span class="fw-bold">{{ $movie['title']}}</span>                    
                    </h5>
    
                    <!-- Titolo originale -->
                    @if($movie['title'] !== $movie['original_title'])
                        <h6>
                            <span class="opacity-100 text-uppercase fs-6">Titolo originale: </span>
                            <span class="fw-bold">{{ $movie['original_title'] }}</span>  
                        </h6>
                    @endif

                    {{-- nationality --}}
                    <h6 class="card-title">                        
                        <span class="opacity-100 text-uppercase fs-6">Lingua: </span>
                        <span class="fw-bold">{{ $movie['nationality']}}</span> 
                    </h6>
    
                    <!-- Voto -->
                    <h6>
                        <span class="opacity-100 text-uppercase fs-6">Voto:</span>
                        <span class="fw-bold">{{ $movie['vote']}}</span> 
                    </h6>
                </div>
            </div>
        @endforeach
    </div>
@endsection