<?php

namespace App\Http\Controllers;

use App\Models\Pal;
use App\Http\Requests\StorePalRequest;
use App\Http\Requests\UpdatePalRequest;

class PalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pals.index', ['pals' => Pal::all()->sortByDesc('score')]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePalRequest $request)
    {
        //dd($request->status);

        $pal = new Pal();
        $pal->name = $request->name;
        $pal->phone_number = $request->phone_number;
        $pal->status = $request->status;
        $pal->level = $request->level;
        $pal->gender = $request->gender;
        $pal->fun_score = $request->fun_score;
        $pal->attraction_score = $request->attraction_score;
        $pal->custom_multiplier = $request->custom_multiplier;
        $pal->notes = $request->notes;

        $pal->save();

        return view('pals.index', ['pals' => Pal::all()->sortByDesc('score')]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pal $pal)
    {
        return view('pals.get', $pal);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pal $pal)
    {
        return view('pals.edit', ['pal' => $pal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePalRequest $request, Pal $pal)
    {
        $pal->name = $request->name;
        $pal->phone_number = $request->phone_number;
        $pal->status = $request->status;
        $pal->level = $request->level;
        $pal->gender = $request->gender;
        $pal->fun_score = $request->fun_score;
        $pal->attraction_score = $request->attraction_score;
        $pal->custom_multiplier = $request->custom_multiplier;
        $pal->notes = $request->notes;

        $pal->save();

        return view('pals.index', ['pals' => Pal::all()->sortByDesc('score')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pal $pal) {}
}
