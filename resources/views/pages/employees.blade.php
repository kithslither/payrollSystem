	@extends('layouts.master')

	@section('title')
		Employees
	@stop


	@section('content')
		<h1>Employees</h1>
		<p>
		@foreach ($employees as $emp)
    	<p>This is user {{ $emp }}</p>
		@endforeach
	@stop	

