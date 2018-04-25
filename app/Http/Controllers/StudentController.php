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
    public function index()
    {
        //
        $students = DB::table('students')
        ->paginate(5);
        return view('students.index', ['students' => $students]);
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

    public function search(Request $request) {
        $constraints = [
            'surname' => $request['surname'],
            'given_name' => $request['given_name'],
            'nationality' => $request['nationality'],
            'sex' => $request['sex'],
            'date_of_birth' => $request['date_of_birth'],
            'district' => $request['district'],
            'phone_number' => $request['phone_number'],
            'class' => $request['class']         
            ];
        $students = $this->doSearchingQuery($constraints);
        $constraints['given_name'] = $request['given_name'];
        return view('students.index', ['students' => $students, 'searchingVals' => $constraints]);
    }
    private function doSearchingQuery($constraints) {
        $query = DB::table('students')
        ->select('students.surname as surname', 'students.given_name as given_name',
            'students.nationality as nationality', 'students.sex as sex',
            'students.date_of_birth as date_of_birth', 'students.district as district',
            'students.phone_number as phone_number', 'students.class as class');
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where($fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }
    private function validateInput($request) {
        $this->validate($request, [
            'surname' => 'required|max:60',
            'given_name' => 'required|max:60',
            'nationality' => 'required|max:60',
            'sex' => 'required',
            'date_of_birth' => 'required',
            'phone_number' => 'required|max:10',
            'district' => 'required',
            'county' => 'required',
            'subcounty' => 'required',
            'village' => 'required',
            'level_of_education' => 'required',
            'class' => 'required',
            'father_name' => 'required',
            'father_contact' => 'required',
            'mother_name' => 'required',
            'mother_contact' => 'required'
        ]);
    }

    private function createQueryInput($keys, $request) {
        $queryInput = [];
        for($i = 0; $i < sizeof($keys); $i++) {
            $key = $keys[$i];
            $queryInput[$key] = $request[$key];
        }

        return $queryInput;
    }
}
