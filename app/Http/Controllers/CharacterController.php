<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\character;
use App\Models\classes;

class CharacterController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('character.edit', ['char' => character::select('name','class','id')->with('classes')->find($id),'classes' => classes::all()]);
    }
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        $characters = character::with('classes')->get();
        return view('character.index', ['characters'=>$characters]);
    }
     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function create()
    {
        return view('character.create', ['classes' => classes::get()]);
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        character::find($id)->update($request->all());
        $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('character.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function store(Request $request)
    {
        $character = new character();
        $character->fill($request->all());
        $character->save();
        $request->session()->flash('status', 'Task was successful!');
        return redirect()->route('character.edit');
    }
}
