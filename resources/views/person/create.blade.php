@extends('app')

@section('title','스킬 정보')

@section('content')
<h1> Add New person</h1>
<form action="/person" method="POST">
	@include('person.form')

	<button> Add person </button>
</form>
@endsection
