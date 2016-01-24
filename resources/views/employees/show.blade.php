@extends('layouts.master')
@section('content')

<div class="container-fluid">
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Employee Details
            </h1>
                       
        </div>
</div>
<div class="row">
	<div class="col-lg-6">			

	 {!! Form::open(array('url' => 'employees/' .$employee->id)) !!}

		<div class="form-group">
				{!! Form::label('emp_id', 'Employee ID:') !!}
				{!! Form::text('emp_id',  $employee->emp_id, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
				{!! Form::label('fname', 'Firstname:') !!}
				{!! Form::text('fname', $employee->fname, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
				{!! Form::label('mname', 'Middlename:') !!}
				{!! Form::text('mname', $employee->mname, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
				{!! Form::label('lname', 'lastname:') !!}
				{!! Form::text('lname', $employee->lname, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
				{!! Form::label('address', 'Adress:') !!}
				{!! Form::text('address', $employee->address, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
				{!! Form::label('phone', 'Phone:') !!}
				{!! Form::text('phone', $employee->phone, ['placeholder' => '+63','class' => 'form-control']) !!}
		</div>

		<div class="form-group">
				{!! Form::label('email', 'E-mail:') !!}
				{!! Form::text('email', $employee->email, ['placeholder' => 'example@gmail.com', 'class' => 'form-control']) !!}
		</div>

		<div class="form-group">

			
		</div>
			
			{!! Form::hidden('_method', 'DELETE') !!}
			{!! Form::submit('Delete', array('class' => 'btn btn-danger form-control')) !!}
			
		</div>
	{!! Form::close() !!}

</div>
</div>
</div>
@stop
