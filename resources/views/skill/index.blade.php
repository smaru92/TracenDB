@extends('app')

@section('title','스킬 정보')

@section('content')
<h1>스킬정보</h1>
<ul>
	<li>
		<a href="/skill/create"> 스킬정보 추가 </a>
	</li>
	<li>
		<a href="/skill/?active=1"> Active skill </a>
	</li>
	<li>
		<a href="/skill/?active=0"> Inactive skill </a>
	</li>
</ul>
@include('skill.searchForm')
@error('name')
   <p style="color:red"> {{ $message }} </p>
@enderror
<table>
	<tr>
		<th>
			번호
		</th>
		<th>
			스킬명(한)
		</th>
		<th>
			스킬명(일)
		</th>
		<th>
			분류
		</th>
		<th>
			스킬포인트
		</th>
		<th>
			설명
		</th>
	</tr>
	@forelse ($skills as $skill)
	<tr>
        <td>
            {{$skill->id}}
        </td>
		<td>
			<a href="/skill/{{$skill->id}}">
					<strong>
							{{$skill->name_ko}}
					</strong>
			</a>
		</td>
        <td>
            {{$skill->name_jp}}
        </td>
		<td>
			{{ $skill->category }}
		</td>
		<td>
			{{ $skill->point }}
		</td>
		<td>
			{!! $skill->content !!}
		</td>
	</tr>
	@empty
	<tr>
		<td colspan="7">
						No skill to show.
		</td>
	</tr>
	@endforelse
</table>
@endsection
