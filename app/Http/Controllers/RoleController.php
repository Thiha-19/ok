<?php

namespace App\Http\Controllers;
use App\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('role.home', [
            "roles" => Role::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role.create');
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
            'role' => 'required',
            'approx_salary' => 'required|max:4',
            'description' => 'required',
        ]);

        //create role
        $role = new Role;
        $role->role = $request->input('role');
        $role->approx_salary = $request->input('approx_salary');
        $role->description = $request->input('description');
        $role->save();

        return redirect('/roles')->with('success', 'Role Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        return view('role.detail')->with('role', $role);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        return view('role.update')->with('role', $role);

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
            'role' => 'required',
            'approx_salary' => 'required|max:4',
            'description' => 'required',
        ]);

        //update role
        $role = Role::find($id);
        $role->role = $request->input('role');
        $role->approx_salary = $request->input('approx_salary');
        $role->description = $request->input('description');
        $role->save();

        return redirect('/roles')->with('success', 'Role Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect('/roles')->with('success', 'Role Deleted');
    }
}
