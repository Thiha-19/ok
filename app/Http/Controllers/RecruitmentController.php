<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment;
use App\Models\Role;
use App\Models\Department;
use Illuminate\Support\Facades\DB;


class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruitments = Recruitment::all();
        return view('recruitment.home',
        ['roles' => Role::all()],
        ['departments' => Department::all()])->with(['recruitments' => $recruitments]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recruitment.create',
        ['roles' => Role::all()],
        ['departments' => Department::all()]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'num_of_positions' => 'required|max:2',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ]);

        //create recruitment
        $recruitment = new Recruitment;
        $recruitment->num_of_positions = $request->input('num_of_positions');
        $recruitment->start_date = $request->input('start_date');
        $recruitment->end_date = $request->input('end_date');
        $recruitment->description = $request->input('description');
        $recruitment->role_id = $request->input('role');
        $recruitment->department_id = $request->input('department');
        $recruitment->save();
        return redirect('/recruitments')->with('success', 'Recruitment Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recruitment = Recruitment::find($id);
        return view('recruitment.detail',
        ['roles' => Role::all()],
        ['departments' => Department::all()])->with('recruitment', $recruitment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recruitment = Recruitment::find($id);
        return view('recruitment.update',
        ['roles' => Role::all()],
        ['departments' => Department::all()]
        )->with('recruitment', $recruitment);
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
            'num_of_positions' => 'required|max:2',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ]);

        //update recruitment
        $recruitment = Recruitment::find($id);
        $recruitment->num_of_positions = $request->input('num_of_positions');
        $recruitment->start_date = $request->input('start_date');
        $recruitment->end_date = $request->input('end_date');
        $recruitment->description = $request->input('description');
        $recruitment->role_id = $request->input('role');
        $recruitment->department_id = $request->input('department');
        $recruitment->save();
        return redirect('/recruitments')->with('success', 'Recruitment updated');


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
