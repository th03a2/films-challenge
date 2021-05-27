<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $movies=Movie::where( function ($q) use ($request){
                            if($request->search){
                                $q->where('title', 'like', "%{$request->search}%");
                            }
                        })
                        ->limit(5)
                        ->get();
        return response()->json($movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find(Movie $movie)
    {
        return $movie;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $movie=Movie::create ($request->all());
        return response()->json($movie, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
        {
            $movie->update($request->all());
            return response()->json($movie, 201);
        }

}
