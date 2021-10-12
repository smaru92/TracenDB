@extends('app')

@section('title','스킬 정보')

@section('content')
<h1> Add New skill</h1>
<form action="/skill" method="POST">
	@include('skill.form')

	<button> Add skill </button>
</form>
@endsection
