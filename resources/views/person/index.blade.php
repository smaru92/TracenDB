@extends('app')

@section('title','우메무스메  정보')

@section('content')
<h1>우메무스메 정보</h1>
<ul>
	<li>
		<a href="/person/create"> 우메무스메 정보 추가 </a>
	</li>
	<li>
		<a href="/person/?active=1"> Active person </a>
	</li>
	<li>
		<a href="/person/?active=0"> Inactive person </a>
	</li>
</ul>
@include('person.searchForm')
@error('name')
   <p style="color:red"> {{ $message }} </p>
@enderror
<table>
	<tr>
		<th>
			번호
		</th>
		<th>
			이름(한)
		</th>
		<th>
			이름(일)
		</th>
	</tr>
	@forelse ($people as $person)
	<tr>
        <td>
            {{$person->id}}
        </td>
		<td>
			<a href="/person/{{$person->id}}">
					<strong>
							{{$person->name_ko}}
					</strong>
			</a>
		</td>
        <td>
            {{$person->name_jp}}
        </td>
	</tr>
	@empty
	<tr>
		<td colspan="7">
						No person to show.
		</td>
	</tr>
	@endforelse
</table>
@endsection
