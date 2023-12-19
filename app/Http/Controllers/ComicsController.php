<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicsRequest;
use App\Http\Requests\UpdateComicsRequest;
use App\Models\Comics;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comics::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $data = $request->validate(
            [
                "title"=>"required|max:100",
                "description"=>"nullable|max:10000",
                "thumb"=>"required|min:3|max:225",
                "price"=>"requied|decimal|min:1|max:50",
                "series"=>"required|min:1|max:70",
                "type"=>"required|min:1|max:70"
            ],
        );

        $comic=Comic::create($data);
        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comics::FindOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $comic=Comic::FindOrFail($id);
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            "title"=>"required|max:100",
            "description"=>"nullable|max:10000",
            "thumb"=> ["required", "url", "min:3", "max:225"],
            "price"=>"required|decimale|min:1|max:70",
            "sale:date"=>"required!date|max:70",
            "type"=>"required|min:1|max:70"
        ]);

        $comic=Comic::findOrFail($id);
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Comics $comics)
    // {
    //     //
    // }
}
