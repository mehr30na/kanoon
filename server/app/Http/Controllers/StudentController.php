<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return Student::paginate(10);
//        return Student::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request->all();
        return Student::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Student::find($id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        //
//    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        //
        Student::find($id)->update($request->all());
        return Student::find($id);
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
        return Student::destroy($id);
    }

    public function search($term)
    {
        //
        // return Student::destroy($id);
        //return $term;
        return Student:: where('fullname', 'LIKE', '%'. $term .'%')
            ->orWhere('national_code', 'LIKE', '%'. $term .'%')
            ->orWhere('idcrd_number', 'LIKE', '%'. $term .'%')
            ->orWhere('birt_hdate', 'LIKE', '%'. $term .'%')
            ->orWhere('father_name', 'LIKE', '%'. $term .'%')
            ->orWhere('birth_place', 'LIKE', '%'. $term .'%')
            ->orWhere('living_place', 'LIKE', '%'. $term .'%')
            ->orWhere('file_number', 'LIKE', '%'. $term .'%')
            ->orWhere('phone', 'LIKE', '%'. $term .'%')
            ->orWhere('mobile', 'LIKE', '%'. $term .'%')
            ->orWhere('doctor_name', 'LIKE', '%'. $term .'%')
            ->get();
    }
}
