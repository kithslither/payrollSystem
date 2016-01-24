<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;
//use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use App\Http\Requests\AddEmployeeRequest;


class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view('employees.index')->with('employee', $employee);
        //return $employee;
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       Employee::create($request->all());
       return redirect('employees');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $employee = Employee::find($id);
        return view('employees.show', compact('employee'));
       // dd($employee);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        //$employee = Employee::where('id', $id)->first();  
        //return $employee;
        return view('employees.edit', compact('employee', $employee));
    }

    /**\
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->emp_id = $request->emp_id;
        $employee->fname = $request->fname;
        $employee->mname = $request->mname;
        $employee->lname = $request->lname;
        $employee->address = $request->address;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->save();
        
        return redirect()->route('employees.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id)->delete();
        return redirect()->route('employees.index');
    }
}
