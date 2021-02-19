<a href="{{ action("PetsController@index") }}">Back to the list</a>

<h1>Owner details</h1>

<button><a href="{{ action("OwnersController@delete", $owner->id) }}">Delete this owner</a></button>
<button><a href="{{ action("OwnersController@edit", $owner->id) }}">Edit this owner</a></button>

<p><b>First name:</b> {{ $owner->first_name }}</p>
<p><b>Surname:</b> {{ $owner->surname }}</p>

@if (isset($owner->address))
    <p>Address: {{ $owner->address }}</p>
@endif
@if (isset($owner->email))
    <p>Email: {{ $owner->email }}</p>
@endif
@if (isset($owner->phone))
    <p>Phone: {{ $owner->phone }}</p>
@endif

<h2>Pets:</h2>
{{-- <ul>
    @foreach ($owner->pets as $pet)
        <li><a href="{{ action("PetsController@show", $pet->id) }}">{{ $pet->name }} <button><a href="{{ action("PetsController@delete") }}">Delete</a></button>
            <button><a href="{{ action("PetsController@edit") }}">Edit</a></button></a></li>
    @endforeach
</ul> --}}

<a href="{{ action("PetsController@create", $owner->id) }}">Add a new pet</a>
