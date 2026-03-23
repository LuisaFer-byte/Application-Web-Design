<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $superheroes = Superhero::all();
          return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Superhero::create($request->all());
        return redirect()->route('superheroes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Superhero  $superhero
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $superhero = Superhero::findOrFail($id);
        return view('superheroes.show', compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Superhero  $superhero
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $superhero = Superhero::findOrFail($id);
        return view('superheroes.edit', compact('superhero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Superhero  $superhero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Superhero $superhero)
    {
        $superhero = Superhero::findOrFail($id);
        $superhero->update($request->all());

        return redirect()->route('superheroes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Superhero  $superhero
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $superhero = Superhero::findOrFail($id);
        $superhero->delete();

        return redirect()->route('superheroes.index');
    }
}
