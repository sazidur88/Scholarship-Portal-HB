<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\ApprovedApplication;
use App\Models\Scholarship;
use App\Models\Student;
use App\Scopes\TenantScope;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
            'scholarship_id' => $scholarship_id,
            
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show_profile(Request $request, $student_id)
    {

        $student_data = Student::with([
            'present_address',
            'permanent_address',
            'degree_information',
            'achievements',
        ])->find($student_id);


        return view('tenant.manage_applications.manage_applications_student_profile', [
            'student_data' => $student_data,
            'academic_data' => $student_data->degree_information,
            'addresses_present' => $student_data->present_address,
            'addresses_permanent' => $student_data->permanent_address,
            'achievements' => $student_data->achievements,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($scholarship_id, $student_id)
    {
        $scholarship_data = Scholarship::find($scholarship_id);
        $student_data = Student::find($student_id);

        return view('tenant.manage_applications.manage_applications_approve', [
            'scholarship_data' => $scholarship_data,
            'student_data' => $student_data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'student_id' => 'required',
            'scholarship_id' => 'required',
            'approved_amount' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
        ]);

        $approve = new ApprovedApplication();
        $approve->student_id = $request->student_id;
        $approve->scholarship_id = $request->scholarship_id;
        $approve->approved_amount = $request->approved_amount;
        $approve->from_date = $request->from_date;
        $approve->to_date = $request->to_date;
        $approve->approval_date = now();
        $approve->approved_by = Auth::user()->name;
        $approve->save();


        $student = Student::find($request->student_id);        
        $student->scholarships()->detach($request->scholarship_id);
        $student->scholarships()->attach($request->scholarship_id, [
            'is_approve' => 1
        ]);


        return redirect()->route('manage_applications_index', $request->scholarship_id)->with('success', 'Application Approved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function application_scholarship_details(Request $request, $scholarship_id, $student_id)
    {
        $approved_application_detail= ApprovedApplication::where('scholarship_id',$scholarship_id)->where('student_id',$student_id)->first();

        $student_data = Student::find($student_id)->name;
        $scholarship_data = Scholarship::find($scholarship_id)->scholarship_title;


        return view('tenant.manage_applications.manage_application_scholarship_details', [
            'approved_application_detail' => $approved_application_detail,
            'student_data' => $student_data,
            'scholarship_data' => $scholarship_data,
        ]);
        
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
    public function update(Request $request)
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
