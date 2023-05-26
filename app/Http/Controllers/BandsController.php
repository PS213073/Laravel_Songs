<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\Song;
use Illuminate\Http\Request;

class BandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands = Band::all();
        return view('bands.index', ['bands' => $bands], ['title' => 'Bands']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bands.create',['title' => 'Bands']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'genre' => 'required',
            'founded' => 'required',
        ]);

        $newBand = new Band([
            'name' => $request->get('name'),
            'genre' => $request->get('genre'),
            'founded' => $request->get('founded'),
        ]);
        $newBand->save();

        return redirect()->route('bands.index',['title' => 'Bands'])
            ->with('success', 'Band created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Band $band)
    {
        return view('bands.edit', compact('band'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Band $band)
    {
        $band->update([
            'name' => $request->name,
            'genre' => $request->genre,
            'founded' => $request->founded,
        ]);

        return redirect()->route('bands.index')->with('message', 'Band Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bands = Band::find($id);
        $bands->delete();

        return redirect()->route('bands.index',['title' => 'Bands'])
            ->with('success', 'Band deleted successfully');
    }
}
