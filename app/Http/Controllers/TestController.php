<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;
use Illuminate\Support\Facades\Input;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data=Test::all();
	   return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data=csrf_token();
	   return response()->json($data);
	   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test= New Test;
	   $test->data=Input::get('email');
	   $test->custom=Input::get('phone');
	   $test->save();
	   
	   return response()->json($test->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $test=  Test::find($id);
	   
	   
	   return response()->json($test);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test=  Test::find($id);
	   
	   
	   return response()->json($test);
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
         $test=  Test::find($id);
	   $test->data=Input::get('email');
	   $test->custom=Input::get('phone');
	   $test->save();
	   
	   return response()->json($test->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test=  Test::destroy($id);
	   
	   
	   return response()->json($test);
    }
}
