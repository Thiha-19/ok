<?php

namespace App\Http\Controllers;
use App\Models\Department;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('department.home', [
            "departments" => Department::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
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
            'department_name' => 'required',
            'email' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        //create department
        $department = new Department;
        $department->department_name = $request->input('department_name');
        $department->email = $request->input('email');
        $department->location = $request->input('location');
        $department->description = $request->input('description');
        $department->save();

        return redirect('/departments')->with('success', 'Department Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::find($id);
        return view('department.detail')->with('department', $department);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::find($id);
        return view('department.update')->with('department', $department);
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
            'department_name' => 'required',
            'email' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        //update department
        $department = Department::find($id);
        $department->department_name = $request->input('department_name');
        $department->email = $request->input('email');
        $department->location = $request->input('location');
        $department->description = $request->input('description');
        $department->save();

        return redirect('/departments')->with('success', 'Department Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);
        $department->delete();
        return redirect('/departments')->with('success', 'Department Deleted');
    }
}
