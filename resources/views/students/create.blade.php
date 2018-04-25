@extends('students.base')

@section('action-content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Student</div>

                <div class="panel-body">
                    <br>

                    {!!Form::open(array('route' =>'students.store' )) !!}
                    	<div class="form-group">
                    		{!!Form::label('surname',' Surname') !!}
                    		{!!Form::text('surname', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('given_name',' Given name') !!}
                    		{!!Form::text('given_name', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('nationality',' Nationality') !!}
                    		{!!Form::text('nationality', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('sex',' sex') !!}
                    		{!!Form::text('sex', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('date_of_birth',' Date of birth') !!}
                    		{!!Form::text('date_of_birth', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('phone_number',' Phone Number') !!}
                    		{!!Form::text('phone_number', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('district',' district') !!}
                    		{!!Form::text('district', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('county',' county') !!}
                    		{!!Form::text('county', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('subcounty',' subcounty') !!}
                    		{!!Form::text('subcounty', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('village',' Village') !!}
                    		{!!Form::text('village', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('level_of_education',' Level Of Education') !!}
                    		{!!Form::text('level_of_education', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('class',' Class') !!}
                    		{!!Form::text('class', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('father_name',' Father Name') !!}
                    		{!!Form::text('father_name', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('father_contact',' Father Contact') !!}
                    		{!!Form::text('father_contact', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('mother_name',' Mother Name') !!}
                    		{!!Form::text('mother_name', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::label('mother_contact',' Mother Contact') !!}
                    		{!!Form::text('mother_contact', null,['class'=>'form-control']) !!}                   		
                    	</div>
                    	<div class="form-group">
                    		{!!Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                    	</div>
                    {!!Form::close() !!}
                    
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection