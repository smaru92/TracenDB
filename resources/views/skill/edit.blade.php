<h1> Add New skill</h1>

<form action="/skill/{{$skill->id}}" method="post">
    @method('PATCH')
    @include('skill.form')

    <button> Save skill </button>
</form>
