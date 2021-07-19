<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rows = Album::all(); 
        return view('album.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('album.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
            'album_name' => 'required',
            'artist_name' => 'required'
            ],
        
            [ 
            'album_name.required' => 'Wajib di Isi',
            'artist_name.required' => 'Wajib di Isi'
            ]
        ); 

        Album::create([ 
        'album_name' => $request->album_name,
        'artist_name' => $request->artist_name

        ]); 
        return redirect('album');

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
    public function edit($id)
    {
        //
        $row = Album::findOrFail($id); 
        return view('album.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate(
            [
            'album_name' => 'required',
            'artist_name' => 'required'
            ],
        
            [ 
            'album_name.required' => 'Wajib di Isi',
            'artist_name.required' => 'Wajib di Isi'
            ]
        ); 
            
            $row = Album::findOrFail($id); 
            $row->update([
            'album_name' => $request->album_name,
            'artist_name' => $request->artist_name
            ]); 
            
        return redirect('album'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
