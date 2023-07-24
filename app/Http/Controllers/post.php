<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class post extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'this is list of post';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'post created';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'store the post';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'show the post';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'edit the post';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'update the post';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'delete the post';
    }
}
