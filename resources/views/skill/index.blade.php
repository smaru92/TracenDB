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
@error('name')
   <p style="color:red"> {{ $message }} </p>
@enderror
<table>
	<tr>
		<th>
			스킬명
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
			<a href="/skill/{{$skill->id}}">
					<strong>
							{{$skill->id.":".$skill->name_ko."[".$skill->name_jp."]"}}
					</strong>
			</a>
		</td>
		<td>
			{{ $skill->category }}
		</td>
		<td>
			{{ $skill->point }}
		</td>
		<td>
			{{ $skill->content }}
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
