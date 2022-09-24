<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\User;
use App\Models\Score;

class ScoreController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData']=Result::all();
        return view('Backend.pages.scores.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['editData'] = "";
        return view('Backend.pages.scores.add',$data);
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
            'user_id' => 'required',
            'unit_name' => 'required',
            'subject_one' => 'required',
            'subject_two' => 'required',
            'subject_three' => 'required',
            'subject_four' => 'required',
            'subject_one_score' => 'required',
            'subject_two_score' => 'required',
            'subject_three_score' => 'required',
            'subject_four_score' => 'required',


        ]);

        $totalScore = $request->subject_one_score+$request->subject_two_score+$request->subject_three_score+$request->subject_four_score;

    	 $Score=new Result();
    	 $Score->user_id=$request->user_id;
         $Score->unit_name=$request->unit_name;
         $Score->subject_one=$request->subject_one;
         $Score->subject_two=$request->subject_two;
         $Score->subject_three=$request->subject_three;
         $Score->subject_four=$request->subject_four;
         $Score->subject_one_score=$request->subject_one_score;
         $Score->subject_two_score=$request->subject_two_score;
         $Score->subject_three_score=$request->subject_three_score;
         $Score->subject_four_score=$request->subject_four_score;
         $Score->total_score=$totalScore;
    	 $Score->save();
         return redirect()->route('score.index')->with('success','score Added!');
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
        $data['editData'] = Score::find($id);
        return view('Backend.pages.scores.add',$data);

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


    	 $Score=Score::find($id);
    	 $Score->year_name=$request->year_name;
    	 $Score->save();
         return redirect()->route('score.index')->with('success','Year Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $board=Score::find($id);
        $board->delete();
        return back()->with('success',"Score Deleted");
    }

}
