<?php

namespace App\Http\Controllers;

use App\Models\PokemonSpecies;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PokemonSpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('species.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PokemonSpecies::create([
            'name' => $request->name,
            'number' => $request->number
        ]);

        return redirect('/pokemon-sp');
    }

    /**
     * Display the specified resource.
     */
    public function show(PokemonSpecies $pokemonSpecies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PokemonSpecies $pokemonSpecies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PokemonSpecies $pokemonSpecies)
    {
        $pokemonSpecies->name = $request -> name;
        $pokemonSpecies->number = $request -> number;
        $pokemonSpecies->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PokemonSpecies $pokemonSpecies)
    {
        $pokemonSpecies->delete();
        return redirect('/pokemon-sp');
    }
}
