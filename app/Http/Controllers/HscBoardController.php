<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HscBoard;

class HscBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData']=HscBoard::all();
        return view('Backend.pages.boards.view-hsc-board',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['editData']="";
        return view('Backend.pages.boards.add-hsc-board',$data);
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
            'board_name' => 'required|unique:hsc_boards,board_name'

        ]);

    	 $hscBoard=new HscBoard();
    	 $hscBoard->board_name=$request->board_name;
    	 $hscBoard->save();
         return redirect()->route('board.index')->with('success','Hsc Board Added!');
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
        $data['editData'] = HscBoard::find($id);
        return view('Backend.pages.boards.add-hsc-board',$data);

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

    	 $hscBoard=HscBoard::find($id);
    	 $hscBoard->board_name=$request->board_name;
    	 $hscBoard->save();
         return redirect()->route('board.index')->with('success','Hsc Board Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $board=HscBoard::find($id);
        $board->delete();
        return back()->with('success',"Board Deleted");
    }
}
