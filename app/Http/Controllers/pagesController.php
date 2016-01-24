<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class pagesController extends Controller
{
	public function getindex(){
		return view('pages.menu2');
    }

    public function getEmployees(){
    	return view('pages.employees2');

    }

    public function getPayroll(){
    	return view('pages.payroll');

    }

    public function tab(){
        return view('employees.index');
    }

    public function create(){
       return view('employees.create');
    }


}
