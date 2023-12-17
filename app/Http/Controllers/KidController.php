<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kider');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page');
    }

    public function about()
    {
        return view('about');
        
    }

    public function classes()
    {
        return view('classes');
    }

    public function contact()
    {
        return view('contact');
    }

    public function testimonial()
    {
        return view('testimonial');
    }

    public function facilities()
    {
        return view('facilities');
    }

    public function team()
    {
        return view('team');
    }

    public function action()
    {
        return view('action');
    }

    public function appointment()
    {
        return view('appointment');
    }

    public function error404()
    {
        return view('404page');
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
