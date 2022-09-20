<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
class UnitController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData']=Unit::all();
        return view('Backend.pages.units.view',$data);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['editData'] = "";
        return view('Backend.pages.units.add',$data);
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
            'unit_name' => 'required|unique:units,unit_name',
            'amount' => 'required'

        ]);

    	 $Unit=new Unit();
    	 $Unit->unit_name=$request->unit_name;
         $Unit->amount=$request->amount;
    	 $Unit->save();
         return redirect()->route('unit.index')->with('success','unit Added!');
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
        $data['editData'] = Unit::find($id);
        return view('Backend.pages.units.add',$data);

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


    	 $Unit=Unit::find($id);
    	 $Unit->unit_name=$request->unit_name;
         $Unit->amount=$request->amount;
    	 $Unit->save();
         return redirect()->route('unit.index')->with('success','unit Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $board=Unit::find($id);
        $board->delete();
        return back()->with('success',"unit Deleted");
    }
}
