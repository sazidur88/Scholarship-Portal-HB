<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;


class ManageApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($scholarship_id)
    {
        $scholarship = Scholarship::find($scholarship_id);

        $applied_students = $scholarship->students;

        return view('tenant.manage_applications.manage_applications_index', [
            'applied_students' => $applied_students,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_profile(Request $request, $student_id)
    {

        $student_data = Student::find($student_id);

        dd($student_data);


        // $applied_students = $student_data->students;


        $addresses_present = $student_data->address->where("address_type", "PRESENT");
        $addresses_permanent = $student_data->address->where("address_type", "PERMANENT");

        $academic_data = Student::find($student_data->id)->degree_information;
        $achievements = Student::find($student_data->id)->achievements;

        // dd($academic_data);

        return view('tenant.manage_applications.manage_applications_student_profile', [
            'student_data' => $student_data,
            'academic_data' => $academic_data,
            'addresses_present' => $addresses_present,
            'addresses_permanent' => $addresses_permanent,
            'achievements' => $achievements,
        ]);

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
        //
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
