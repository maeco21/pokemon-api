@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h1 id ="main">Pokémon </h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Route::has('pokemon'))
                                
                                <div class="container">
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">VIEW ALL POKEMONS</a> 
                                </div>
                                        @endif

                                        <div>

                                        
                                            <?php
                                            $pokemon ='1';
                                            $api =curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon");
                                            curl_setopt($api,CURLOPT_RETURNTRANSFER, true);
                                            $response = curl_exec($api);
                                            curl_close($api);
                                            $json =json_decode($response,TRUE);
                                            echo '<br>';
                                            echo '<h2>  <h2>';
                                            echo $json['name'];
                                            $json =json_decode($response);

                                            echo '<br>';
                                            echo '<h2> HABILIDADES :<h2>';
                                            foreach ($json->abilities as $k => $v){
                                                echo $v->ability-> name. '<br>';
                                            }
                                            echo '<br>';
                                            echo '<br>';
                                            echo '<img src="'.$json->sprites->back_default.'"width = "300">';
                                            echo '<img src=""'.$json->sprites->front_default.'"width = "300">';
                                            echo '<img src=""'.$json->sprites->back_female.'"width = "300">';
                                            echo '<img src=""'.$json->sprites->front_female.'"width = "300">';

                                            
                                            
                                            
                                            ?>
                                        </div>
                    

                    

                </div>
            </div>
        </div>

        
       
                
                  
    </div>
</div>
@endsection
