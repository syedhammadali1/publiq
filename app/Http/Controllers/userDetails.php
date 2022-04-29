<?php

namespace App\Http\Controllers;

use App\Models\UserDetails as ModelsUserDetails;
use Illuminate\Http\Request;

class userDetails extends Controller
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
        // dd($request->question_2);
        // dd($request->firstname);
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'country' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'question_2' => 'required'
        ],

        [
            'question_2.required' => 'Please Check A Box',
        ]
    );



        ModelsUserDetails::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'country' => $request->country,
            'age' => $request->age,
            'gender' => $request->gender,
            'reviews' => json_encode($request->question_2),
        ]);

        return redirect()->route('home')->with('success', 'Thank You For Registration We Will Back Soon ');
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
