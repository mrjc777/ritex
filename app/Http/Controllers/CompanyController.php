<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Helpers\APIHelpers;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$company = new Company();
        //return $company->all();
        //return \DB::select('select get_all_companies(?,?)', array($valor1, $valor2)); Para mandar parametros
        
        $data = \DB::select('select get_all_companies()');
        return $data[0]->get_all_companies;
        //return $data->get_all_companies;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = \DB::select('select insert_companies(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', array(
        $request->business_name,
        $request->direction,
        $request->city,
        $request->state,
        $request->phone,
        $request->activity,
        $request->legal_representative,
        $request->dni,
        $request->issued,
        $request->email,
        $request->ruex_number,
        $request->enrollment_number,
        $request->nit_number
        ));
        return $data[0]->insert_companies;
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        return $company;
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
        //
    }

    // funciones personalizadas

    public function preregistration()
    {
        $data = \DB::select('select get_companies_preregister()');
        return $data[0]->get_companies_preregister;
    }
}
