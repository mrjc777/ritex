<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = new Company();
        return $company->all();
        
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
        $company = new Company();
        $company->business_name = $request->business_name;
        $company->direction = $request->direction;
        $company->city = $request->city;
        $company->state = $request->state;
        $company->phone = $request->phone;
        $company->activity = $request->activity;
        $company->legal_representative = $request->legal_representative;
        $company->email = $request->email;
        $company->ruex_number = $request->ruex_number;
        $company->enrollment_number = $request->enrollment_number;
        $company->nit_number = $request->nit_number;
        $company->mining_sector = $request->mining_sector;
        $company->ritex_type = $request->ritex_type;
        $company->tax = $request->tax;
        $company->national_custom = $request->national_custom;
        $company->enablement_date = $request->enablement_date;
        $company->user_id = $request->user_id;
        
        $company->save();
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
}
