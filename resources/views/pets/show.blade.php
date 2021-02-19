<a href="{{ action('PetsController@index') }}">Back to main page</a>

<h1>Pet details</h1>

<p>Owner: <a href="{{ action("OwnersController@show", $pet->owner->id) }}">{{ $pet->owner->first_name }} {{ $pet->owner->surname }}</a></p>

<h3>Name: {{ $pet->name }}</h3>
<p>Species: {{ $pet->specie->name }}</p>
<p>Breed: {{ $pet->breed }}</p>
<p>Age: {{ $pet->age }}</p>
<p>Weight: {{ $pet->weight }} lbs</p>
<h3>Photo of {{ $pet->name }}</h3>
<img src="../{{ $pet->photo }}" alt="{{ $pet->name }}">

