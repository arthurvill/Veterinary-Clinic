<h1>Pet details</h1>

<h3>Name: {{ $pet->name }}</h3>
<p>Species: {{ $pet->specie->name }}</p>
<p>Breed: {{ $pet->breed }}</p>
<p>Age: {{ $pet->age }}</p>
<p>Weight: {{ $pet->weight }} lbs</p>
<h3>Photo of {{ $pet->name }}</h3>
<img src="../{{ $pet->photo }}" alt="{{ $pet->name }}">
<br>
<h2>Owner's details</h2>
<p>Name:</p>
