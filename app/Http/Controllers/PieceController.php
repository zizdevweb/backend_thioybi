<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Piece::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = public_path('rapports'); 
        //   return $path;
        if(isset($request->piece)){
            //return $request->all();
            $file = $request->piece;
            // return ($file);
            // foreach($files as $key=>$file){
            $fileTobeSaved = new Piece();
            $filename = $file->getClientOriginalName();
            $fileTobeSaved->name = $filename;
            // $fileTobeSaved->name_origine = $filename;
            $fileTobeSaved->extension = $file->getClientOriginalExtension();
            $fileTobeSaved->size = $file->getSize();
            $fileTobeSaved->rapport_id = $request->rapport_id;
            $fileTobeSaved->path = 'rapports'.DIRECTORY_SEPARATOR.$filename;
            // $fileTobeSaved->reference = $file->getSize();
            $file->move($path,$fileTobeSaved->name);
            $fileTobeSaved->save();
            // }
            return 'piece ajouuté avec succes';
        }else{
            return 'absence de fichier';
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function show(Piece $piece)
    {
        return $piece;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function edit(Piece $piece)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piece $piece)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Piece  $piece
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piece $piece)
    {
        //
    }
}
