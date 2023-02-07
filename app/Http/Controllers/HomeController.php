<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 

      $pokemon = Http::get('https://pokeapi.co/api/v2/pokemon/');
      $pokemonArray = $pokemon->json();
      $pokemonArray=$pokemonArray['results']; 

     
          

      return view('home',compact('pokemonArray') );

     

    }
    
}
