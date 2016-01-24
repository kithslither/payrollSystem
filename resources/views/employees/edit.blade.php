@extends('layouts.master')
@section('title')
	
@stop

@section('content')
	<h1>Add Employees</h1>
	<br>
	{!! Form::model($employee, [
	'method' => 'patch',
	'route' => ['employees.update', $employee->id]]) !!}

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
			
			{!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}

		</div>
	{!! Form::close() !!}

@stop
