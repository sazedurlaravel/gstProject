<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HscYear;

class HscYearController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData']=HscYear::all();
        return view('Backend.pages.years.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['editData'] = "";
        return view('Backend.pages.years.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request,[
            'year_name' => 'required|unique:hsc_years,year_name'

        ]);

    	 $HscYear=new HscYear();
    	 $HscYear->year_name=$request->year_name;
    	 $HscYear->save();
         return redirect()->route('year.index')->with('success','Year Added!');
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
        $data['editData'] = HscYear::find($id);
        return view('Backend.pages.years.add',$data);

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


    	 $HscYear=HscYear::find($id);
    	 $HscYear->year_name=$request->year_name;
    	 $HscYear->save();
         return redirect()->route('year.index')->with('success','Year Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $board=HscYear::find($id);
        $board->delete();
        return back()->with('success',"Year Deleted");
    }
}
