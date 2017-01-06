<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Validator, Input, Redirect, Session, Auth;

use App\Medicine;
class MedicinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->role === "apoteker" || Auth::user()->role === "admin")
        {
            $medicines = Medicine::paginate(10);
            
            return view('medicines.index', [
                'medicines' => $medicines
            ]); 
        } else {
            return redirect('/home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation_rules = array(
            'name' => 'required'
        );

        $validator = Validator::make($request->all(), $validation_rules);

        if (!$validator->fails()) {
            $medicine = new Medicine;
            $medicine->name = $request->name;
            $medicine->save();


            return redirect()->action('MedicinesController@show', [
                'id' => $medicine->id
            ]);
        } else {
            return redirect()->action('MedicinesController@create')
                             ->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if(Auth::user()->role === "apoteker" || Auth::user()->role === "admin")
        {           
            $medicine = Medicine::find($id);

            return view('medicines.show', [
                'medicine' => $medicine
            ]);
        } else {
            return redirect('/home');
        }
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
        $medicine = Medicine::find($id);
        $medicine->delete();
        Session::flash('flash_message', "success deleteing" .  " " . $medicine->name);

        return redirect()->action('MedicinesController@index');
    }
}
