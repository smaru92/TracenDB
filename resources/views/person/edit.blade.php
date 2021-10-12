<h1> Add New person</h1>

<form action="/person/{{$person->id}}" method="post">
    @method('PATCH')
    @include('person.form')

    <button> Save person </button>
</form>
