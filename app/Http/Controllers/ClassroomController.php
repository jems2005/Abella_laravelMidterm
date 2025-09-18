<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classroom = [
            'id' => 1,
            'room_number'=> '101A',
            'teacher'=> 'Joe Abapo',
            'capacity'=> 'Math',

            'id' => 2,
            'room_number'=> '102A',
            'teacher'=> 'MJ Abapo',
            'capacity'=> 'English',

            'id' => 3,
            'room_number'=> '103A',
            'teacher'=> 'Kyle Abapo',
            'capacity'=> 'Science',
        ];

        return view(classroom.index, compact('classroom'));
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
