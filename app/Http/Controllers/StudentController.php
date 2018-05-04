<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;
//
//use Illuminate\Http\Requests;

use App\Http\Requests\StudentRequest;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $s = $request->input('s');
        $students = Student::latest()
            ->search($s)
            ->paginate(5);
        return view('students.index', compact('students','users', 's'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
                return view('students.create', compact('students'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        //
        Student::create($request->all());
        return redirect()->route('students.index')->with('message','Student has been added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Student $student)
    {
        //
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, Student $student)
    {
        //
        $student->update($request->all());
        return redirect()->route('students.index')->with('message','Student has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Student::where('id', $id)->delete();
         return redirect()->route('students.index')->with('message','Student has been deleted successfully');
    }
}
