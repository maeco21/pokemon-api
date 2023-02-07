
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h1 id ="main">Pokémons </h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                            
                       
                    @foreach ($pokemonArray as $pokemon) 


                        <div class="container"> 
                            
                               <a href="{{ url('/pokemon') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" >
                        {{is_array ($pokemon) || isset ($pokemon)}} 
                            
                    
                    </a>
                    </div>
                    

                    
                    
                    @endforeach


                </div>
            </div>
        </div>

        
       
                
                  
    </div>
</div>
@endsection