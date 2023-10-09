<?php

namespace App\Http\Controllers;

use App\Models\wahana;
use App\Models\Image;
use App\Http\Requests\StorewahanaRequest;
use App\Http\Requests\UpdatewahanaRequest;

class WahanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('home', [
        //     'wahana' => wahana::all()
        // ]);
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
    public function store(StorewahanaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(wahana $wahana)
    {
        return view('showWahana', [
            'title' => 'Wahana',
            'wahana' => $wahana,
            'image' => Image::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(wahana $wahana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewahanaRequest $request, wahana $wahana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(wahana $wahana)
    {
        //
    }
}
