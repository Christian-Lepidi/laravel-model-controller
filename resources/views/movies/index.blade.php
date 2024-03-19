@extends('layouts.app')

@section('title', 'Movie List')

@section('main-content')
 <section>
    <div class="container">
        <div class="row">
         @forelse ($movies as $movie)   
          <div class="col-3">
           
           <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5><b>Titolo:</b>{{$movie->title}}</h5>
              <h5><b>Titolo originale:</b>{{$movie->original_title}}</h5>
              <p><b>Data d'uscita:</b>{{$movie->date}}</p>
              <p><b>Voto:</b>{{$movie->vote}}</p>
            </div>
          </div>
        </div>  
        @empty
            <div class="col-12">
             Nessun film
            </div> 
        @endforelse 
            
          
        </div>
      </div>
  
 </section>
@endsection