<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:200'],
            'fee' =>['required', 'numeric'],
            'duration' => ['required','numeric'],
            'banner' => ['required','string'],
            'requirements' => ['required','string']

        ]);

        Course::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'category' => $data['category'],
            'fee' => $data['fee'],
            'tutor_id' => Auth::user()->id,// the person currently logged in is 
            'duration' => $data['duration'],
            'banner' => $data['banner'],
            'requirements' => $data['requirements'],
            'status' => 'not-acitve',
            'password' => Hash::make($data['password']),
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
