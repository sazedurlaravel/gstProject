<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HscBoard;
use App\Models\HscYear;
use App\Models\HscGroup;
use App\Models\Unit;
use App\Models\User;
use Auth;
use App\Models\Result;
class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allData']=User::all();
        return view('Backend.pages.applicants.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['Boards']=HscBoard::all();
        $data['years']=HscYear::all();
        $data['groups']=HscGroup::all();
        $data['units']=Unit::all();
        return view('frontend.pages.application',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'fname'=>'required',
            'mname'=>'required',
            'unit_name'=>'required',
            'ssc_roll'=>'required',
            'ssc_reg'=>'required',
            'ssc_board'=>'required',
            'ssc_year'=>'required',
            'ssc_gpa'=>'required',
            'ssc_group'=>'required',
            'hsc_roll'=>'required',
            'hsc_reg'=> 'required',
            'hsc_board'=> 'required',
            'hsc_year'=>'required',
            'hsc_gpa'=> 'required',
            'hsc_group'=>'required',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $applicant = new User();
        $applicant->id="2022".mt_rand(10000,99999);
        $applicant->name=$request->name;
        $applicant->email=$request->email;
        $applicant->phone=$request->phone;
        $applicant->fname=$request->fname;
        $applicant->mname=$request->mname;
        $applicant->center=$request->center;
        $applicant->exam_roll=mt_rand(10000,99999);
        $applicant->payable_amount=1400;
        $applicant->date_time=$request->date_time;
        $applicant->unit_name=$request->unit_name;
        $applicant->ssc_roll=$request->ssc_roll;
        $applicant->ssc_reg=$request->ssc_reg;
        $applicant->ssc_board=$request->ssc_board;
        $applicant->ssc_year=$request->ssc_year;
        $applicant->ssc_gpa=$request->ssc_gpa;
        $applicant->ssc_group=$request->ssc_group;
        $applicant->hsc_roll=$request->hsc_roll;
        $applicant->hsc_reg=$request->hsc_reg;
        $applicant->hsc_board=$request->hsc_board;
        $applicant->hsc_year=$request->hsc_year;
        $applicant->hsc_gpa=$request->hsc_gpa;
        $applicant->hsc_group=$request->hsc_group;
        $applicant->status=1;
        $applicant->role="Applicant";
        $applicant->password= bcrypt('applicant');
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Images'), $filename);
            $applicant['img']= $filename;
        }
        $applicant->save();
        $user = User::find($applicant->id);
        Auth::login($user);

        return redirect()->route('applicant.dashboard')->with('success',"Application Submited Successfully!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['showData']=User::find($id);
        return view('Backend.pages.applicants.applicant-details',$data);
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

        $applicant=User::find($id);
        $applicant->delete();

        return back()->with('success','Applicant Deleted!');

    }

    public function result(){
        $user_id = Auth::user()->id;
        $data["showData"] = Result::where("user_id",$user_id)->get();
        return view('applicant.Backend.pages.applicants.applicant-result',$data);

    }
}
