<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData']=University::all();
        return view('Backend.pages.university.view',$data);
    }

    public function university()
    {
        $data['alldata']=University::all();
        return view('frontend.pages.gst-universities',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['editData'] = "";
        return view('Backend.pages.university.add',$data);
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
            'name' => 'required',
            'link' => 'required'

        ]);

    	 $university=new University();
    	 $university->name=$request->name;
         $university->link=$request->link;
    	 $university->save();
         return redirect()->route('university.index')->with('success','university Added!');
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
        $data['editData'] = University::find($id);
        return view('Backend.pages.university.add',$data);

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


    	 $university=University::find($id);
    	 $university->university_name=$request->university_name;
    	 $university->save();
         return redirect()->route('university.index')->with('success','university Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $board=University::find($id);
        $board->delete();
        return back()->with('success',"university Deleted");
    }
}
