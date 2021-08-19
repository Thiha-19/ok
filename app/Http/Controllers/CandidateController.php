<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Recruitment;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $id;
    public function index()
    {
        $candidates = Candidate::all();
        return view('candidate.home',
        ['recruitments' => Recruitment::all()])->with(['candidates' => $candidates]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $this->id=$id;
        return view('candidate.create',
        ['recruitments' => Recruitment::all(),'id'=>$this->id]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // print "hey";
        // print ("ok $this->id");
        $this -> validate($request, [
            'candidate_name' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'postal' => 'required',
            'phone' => 'required',
            'prior_exp' => 'required|max:2',
            'education' => 'required',
            'gradfrom' => 'required',
            'graddate' => 'required|max:4',
            'expected_salary' => 'required|max:4',
            'add_info' => 'required',
        ]);

         //create candidate
         $candidate = new Candidate;
         $candidate->candidate_name = $request->input('candidate_name');
         $candidate->email = $request->input('email');
         $candidate->dob = $request->input('dob');
         $candidate->postal = $request->input('postal');
         $candidate->phone = $request->input('phone');
         $candidate->prior_exp = $request->input('prior_exp');
         $candidate->education = $request->input('education');
         $candidate->gradfrom = $request->input('gradfrom');
         $candidate->graddate = $request->input('graddate');
         $candidate->add_info = $request->input('add_info');
         $candidate->expected_salary = $request->input('expected_salary');
         $candidate->recruitment_id =$request->input('recruitment_id');
         $candidate->save();
         return redirect('/candidates')->with('success', 'Candidate Applied');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidate = Candidate::find($id);
        return view('candidate.detail',
        ['recruitments' => Recruitment::all()])->with('candidate', $candidate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidate = Candidate::find($id);
        return view('candidate.update',
        ['recruitments' => Recruitment::all()])->with('candidate', $candidate);
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
        $this -> validate($request, [
            'candidate_name' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'postal' => 'required',
            'phone' => 'required',
            'prior_exp' => 'required|max:2',
            'education' => 'required',
            'gradfrom' => 'required',
            'graddate' => 'required|max:4',
            'add_info' => 'required',
            'expected_salary' => 'required'
        ]);

         //Update candidate
         $candidate = Candidate::find($id);
         $candidate->candidate_name = $request->input('candidate_name');
         $candidate->email = $request->input('email');
         $candidate->dob = $request->input('dob');
         $candidate->postal = $request->input('postal');
         $candidate->phone = $request->input('phone');
         $candidate->prior_exp = $request->input('prior_exp');
         $candidate->education = $request->input('education');
         $candidate->gradfrom = $request->input('gradfrom');
         $candidate->graddate = $request->input('graddate');
         $candidate->add_info = $request->input('add_info');
         $candidate->expected_salary = $request->input('expected_salary');
         $candidate->recruitment_id = $request->input('recruitment_id');
         $candidcandidateate->save();
         return redirect('/candidates')->with('success', 'Candidate Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
