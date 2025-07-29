<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = [
            ['id'=> 1 , 'name' => 'motor yamaha', 'price' => 1000000, 'tanggal' => 2021, 'kilometer' => '100km'],
            ['id'=> 2 , 'name' => 'motor honda', 'price' => 1500000, 'tanggal' => 2020, 'kilometer' => '90km'],
            ['id'=> 3 , 'name' => 'motor suzuki', 'price' => 1400000, 'tanggal' => 2023, 'kilometer' => '80km'],
            ['id'=> 4 , 'name' => 'motor kawasaki', 'price' => 3000000, 'tanggal' => 2021, 'kilometer' => '70km'],
            ['id'=> 5 , 'name' => 'motor ducati', 'price' => 5000000, 'tanggal' => 2023, 'kilometer' => '95km'], 
        ];
        return view('welcome', compact ('motor'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
