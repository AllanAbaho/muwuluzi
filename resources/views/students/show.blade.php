@extends('students.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
       		<div class="panel-heading">Bio Data</div>

                <div class="panel-body">
                	<table class="table">
                        <tr>
                            <th>Item</th>
                            <th>Value </th>
                        </tr>  
                        
                        <tr><td> Surname:</td><td> {!!$student->surname!!}</td></tr>
                        <tr><td> Given Name:</td><td> {!!$student->given_name!!}</td></tr>
                        <tr><td>Nationality:</td><td> {{$student->nationality}}</td></tr>
    					<tr><td>Sex:</td><td> {{$student->sex}}</td></tr>
                        <tr><td>Date Of Birth:</td><td> {{$student->date_of_birth}}</td></tr>
    					<tr><td>Phone Number:</td><td> {{$student->phone_number}}</td></tr>
                        <tr><td>District:</td><td> {{$student->district}}</td></tr>
    					<tr><td>County:</td><td> {{$student->county}}</td></tr>
                        <tr><td>Sub-County:</td><td> {{$student->subcounty}}</td></tr>
                        <tr><td>Village:</td><td> {{$student->village}}</td></tr>
                        <tr><td>Level Of Education:</td><td> {{$student->level_of_education}}</td></tr>
    					<tr><td>Class:</td><td> {{$student->class}}</td></tr>
                        <tr><td>Father's Name:</td><td> {{$student->father_name}}</td></tr>
                        <tr><td>Father's Contact:</td><td> {{$student->father_contact}}</td></tr>
    					<tr><td>Mother's Name:</td><td> {{$student->mother_name}}</td></tr>
                        <tr><td>Mother's Contact:</td><td> {{$student->mother_contact}}</td>   </tr>
                    </tr>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection