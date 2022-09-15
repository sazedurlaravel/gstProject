<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HscGroup;

class HscGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData']=HscGroup::all();
        return view('Backend.pages.groups.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['editData'] = "";
        return view('Backend.pages.groups.add',$data);
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
            'group_name' => 'required|unique:hsc_groups,group_name'

        ]);

    	 $Hscgroup=new HscGroup();
    	 $Hscgroup->group_name=$request->group_name;
    	 $Hscgroup->save();
         return redirect()->route('group.index')->with('success','Group Added!');
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
        $data['editData'] = Hscgroup::find($id);
        return view('Backend.pages.groups.add',$data);

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


    	 $Hscgroup=HscGroup::find($id);
    	 $Hscgroup->group_name=$request->group_name;
    	 $Hscgroup->save();
         return redirect()->route('group.index')->with('success','Group Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $board=HscGroup::find($id);
        $board->delete();
        return back()->with('success',"Group Deleted");
    }
}
