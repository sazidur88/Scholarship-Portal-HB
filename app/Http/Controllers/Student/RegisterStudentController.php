<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Student;
use App\Models\Degree;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegisterStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user_id = Auth::user()->id;
        return view('web.student.student-profile-create');
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
            'user_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'gender' => 'required',
            // 'same_as_parmanent'=>'required',       
        ]);

        // Generating Student Unique ID
        $ldate = date('ym');
        $latest_user = User::latest()->first();
        $latest_user_id = $latest_user->id + 1;
        $last_digit = sprintf("%03d", $latest_user_id);
        $sid = $ldate . $last_digit;


        $student = new Student();
        $student->user_id = $request->user_id;
        $student->sid = $sid;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->dob = $request->dob;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->gender = $request->gender;
        $student->save();


        $this->validate($request, [
            'level' => 'required',
            'class_degree' => 'required',
            'institution' => 'required',
            'marks_cgpa' => 'required',
            'year' => 'required',
        ]);

        $degree = new Degree();
        $degree->st_id = $student->id;
        $degree->level = $request->level;
        $degree->class_degree = $request->class_degree;
        $degree->institution = $request->institution;
        $degree->position = $request->position;
        $degree->marks_cgpa = $request->marks_cgpa;
        $degree->semester = $request->semester;
        $degree->year = $request->year;
        $degree->save();

        $this->validate($request, [
            'division_present' => 'required',
            'district_present' => 'required',
            'upazila_present' => 'required',
            'area_present' => 'required',
        ]);

        $address = new Address();
        $address->division = $request->division_present;
        $address->district = $request->district_present;
        $address->upazila = $request->upazila_present;
        $address->area = $request->area_present;
        $address->address_type = "PRESENT";
        $address->same_as_present = $request->has('same_as_present');
        $address->status = "ACTIVE";
        $student->address()->save($address);

        $same_as_present = $request->same_as_present;
        if ($same_as_present == 0) {
            $address = new Address();
            $address->division = $request->division_permanent;
            $address->district = $request->district_permanent;
            $address->upazila = $request->upazila_permanent;
            $address->area = $request->area_permanent;
            $address->address_type = "PERMANENT";
            $address->status = "ACTIVE";
            $student->address()->save($address);
        }


        return redirect()->route('student_profile', Auth::user()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id = Auth::user()->id;
        $user_data = User::findOrfail($user_id);
        $student_data = User::find($user_id)->student_information;

        // $x = $student_data->id;
        // $y = Student::find($x);
        // $addresses = $y ->student_address();
        // dd ($user_data);

        if (!$student_data)
            return redirect()->route('student_profile_create');
        else
            $academic_data = DB::table('students as student')
                ->WHERE('student.id', $student_data->id)
                ->LEFTJOIN('degrees as degree', 'degree.st_id', '=', 'student.id')
                ->SELECT(
                    'degree.level', 'degree.class_degree', 'degree.institution',
                    'degree.institution',
                    'degree.position',
                    'degree.marks_cgpa',
                    'degree.semester',
                    'degree.year',
                )
                ->first();
        return view('web.student.student-profile', [
            'user_data' => $user_data,
            'student_data' => $student_data,
            'academic_data' => $academic_data,
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
