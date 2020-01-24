<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Hotel;
use App\Genre;

class MovieController extends Controller
{
    public function showMovies()
    {
        $movies = Hotel::All();

        return view('movies.show', compact('movies'));
    }

    public function create()
    {
        $genres = Genre::All();

        return view('movies.create', compact('genres'));
    }

    public function store(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'director' => 'required|max:50|string',
            'duration' => 'required|integer',
            'year' => 'required|integer|max:3000',
            'genre_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return redirect('movies/create')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            $movie = new Movie([
                "name" => $request->name,
                "director" => $request->director,
                "duration" => $request->duration,
                "year" => $request->year,
                "genre_id" => $request->genre_id 
            ]);

            $movie->save();

            return redirect('/movies');
        }
    }

    public function edit($id)
    {
        $movie = Movie::find($id);
        
        $genres = Genre::All();

        return view('movies.edit', compact('movie', 'genres'));
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        $movie->name = $request->name;
        $movie->director = $request->director;
        $movie->duration = $request->duration;
        $movie->year = $request->year;
        $movie->genre_id = $request->genre_id;

        $movie->save();

        return redirect('/movies');
    }

    public function delete($id)
    {
        $movie = Movie::find($id);
        
        $movie->delete();

        return redirect('/movies');
    }

}
