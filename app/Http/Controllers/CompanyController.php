<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\City;
use App\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
		$cities = City::lists('city','id');
		return view('index', compact('cities'));
    }

	public function getCompanies(Request $request, $id){
		if($request->ajax()){
			$companies = Company::companies($id);                
            return response()->json($companies);         
		}
	}
}
