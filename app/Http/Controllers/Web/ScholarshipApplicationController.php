<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\TenantScholarship;
use App\Models\StudentApplication;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ScholarshipApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholarships = TenantScholarship::where('status', "ACTIVE")->orderBy('id', 'DESC')->paginate(100);

        return view('web.scholarship.scholarship-list', [
            'scholarships' => $scholarships,
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
        $scholarship_id = $request->scholarship_id;
        $tenant_id = $request->tenant_id;
        $user_id = Auth::user()->id;
        $student_data = Student::where('user_id', $user_id)->first();

        if (!$student_data)
            return redirect()->route('student_profile_create')->with('warning','Complete your profile to apply for scholarships.');
        // elseif ($student_data) {
        //     $student_id = $student_data->id;

        //     $application_data = StudentApplication::where('student_id', $student_id)->where('tenant_scholarship_id', $tenant_id)->first();

        //     return redirect()->route('student_dashboard')->with('warning', 'You have already applied to this scholarship.');
        // } 
        else
            $student_id = $student_data->id;

        $student_application = new StudentApplication();
        $student_application->tenant_id = $tenant_id;
        $student_application->student_id = $student_id;
        $student_application->tenant_scholarship_id = $scholarship_id;

        $student_application->save();

        return redirect()->route('student_dashboard')->with('success', 'Scholarship Application submitted successfully. We will contact you soon.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($scholarship_id)
    {
        $scholarship = TenantScholarship::find($scholarship_id);

        return view('web.scholarship.scholarship-details', [
            'scholarship' => $scholarship,
        ]);
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
