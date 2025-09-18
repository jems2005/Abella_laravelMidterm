<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = [
            'id' => 1,
            'name'=> 'Joe Abapo',
            'email'=> 'Joe@gmail.com',
            'subject_id'=> 'Math',

            'id' => 2,
            'name'=> 'MJ Abapo',
            'email'=> 'MJ@gmail.com',
            'subject_id'=> 'Math',

            'id' => 3,
            'name'=> 'Kyle Abapo',
            'email'=> 'Kyle@gmail.com',
            'subject_id'=> 'Math',
        ];

        return view(teacher.index, compact('teachers'));
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
