<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Document;
use Illuminate\Http\Request;

class StudentDocumentController extends Controller
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
        // return view('web.student.student-document');
        return view('web.student.student-document');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        // dd($request->all());


        $user_id = $request->user_id;
        $student = Student::where('user_id', $user_id)->first();

        $request->validate([
            'document' => 'mimes:pdf,jpg,png,jpeg',
        ]);


        $doc_input = request('type');
        if ($doc_input) {
            $student_doc = collect();
            for ($i = 0; $i < count($doc_input); $i++) {

                // if ($request->hasFile('document[$i]')) {
                //     $document =  $request->file('document[$i]');
                //     $document_url = $student->id . '_' . time() . '_' . $document->getClientOriginalName();
                //     $document_title = $document->getClientOriginalName();
        
                //     $document->move(public_path('storage/uploaded_file/student_document'), $document_url);
                // } else {
                //     $document_url = '';
                // }

                $document_new = new Document();
                // $document_new->document_title = $document_title[$i];
                $document_new->type = "test";
                // $document_new->document_url = $document_url;

                // $student_doc->push($document_new);

                $student->documents()->save($document_new);

                // $achievement->achievement = $doc_input[$i];

            }
            // $student->documents()->saveMany($student_doc);
        }




        // if ($request->hasFile('document')) {
        //     $document =  $request->file('document');
        //     $document_url = $student->id . '_' . time() . '_' . $document->getClientOriginalName();
        //     $document_title = $document->getClientOriginalName();

        //     $document->move(public_path('storage/uploaded_file/student_document'), $document_url);
        // } else {
        //     $document_url = '';
        // }


        // $document = new Document();
        // $document->document_title = $document_title;
        // $document->type = $request->type;
        // $document->document_url = $document_url;
        // $student->documents()->save($document);

        // return "success";



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
