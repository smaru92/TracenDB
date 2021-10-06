<h1> skill Details </h1>
<div>
<strong>Name</strong>
<p> {{$skill->name}} </p>
</div>
<div>
<strong>Email</strong>
<p> {{$skill->email}} </p></div>

<div>
    <button>
        <a href="/skill/{{ $skill->id }}/edit">
            edit skill
        </a>
    </button>
    <form action="/skill/{{ $skill->id }}" method="POST">
        @method('DELETE')
        @csrf

        <button>Delete skill</button>
    </form>
</div>
