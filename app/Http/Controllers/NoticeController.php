<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData']=Notice::all();
        return view('Backend.pages.notice.view',$data);
    }

    public function notice()
    {
        $data['allData']=Notice::all();
        return view('frontend.pages.notice',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['editData'] = "";
        return view('Backend.pages.notice.add',$data);
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
            'title' => 'required',
            'pdf' => 'required'

        ]);

    	 $Notice=new Notice();
    	 $Notice->title=$request->title;
         if($request->file('pdf')){
            $file= $request->file('pdf');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/files'), $filename);
            $notice['pdf']= $filename;
        }
    	 $Notice->save();
         return redirect()->route('notice.index')->with('success','notice Added!');
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
        $data['editData'] = Notice::find($id);
        return view('Backend.pages.notice.add',$data);

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


    	 $Notice=Notice::find($id);
    	 $Notice->notice_name=$request->notice_name;
    	 $Notice->save();
         return redirect()->route('notice.index')->with('success','notice Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $board=Notice::find($id);
        $board->delete();
        return back()->with('success',"notice Deleted");
    }
}
