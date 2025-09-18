<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject = [
            'id' => 1,
            'subject_name'=> 'Math',
            'description'=> 'Mathematics is the study of numbers, shapes, and patterns.',

            'id' => 2,
            'subject_name'=> 'English',
            'description'=> 'English is the study of language, literature, and communication.',

            'id' => 3,
            'subject_name'=> 'Science',
            'description'=> 'Science is the study of the natural world through observation and experimentation.',
        ];
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
