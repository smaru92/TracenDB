<h1> person Details </h1>
<div>
<strong>Name</strong>
<p> {{$person->name}} </p>
</div>
<div>
<strong>Email</strong>
<p> {{$person->email}} </p></div>

<div>
    <button>
        <a href="/person/{{ $person->id }}/edit">
            edit person
        </a>
    </button>
    <form action="/person/{{ $person->id }}" method="POST">
        @method('DELETE')
        @csrf

        <button>Delete person</button>
    </form>
</div>
