<h2>Create a new pet for {{ $pet->owner->first_name }} {{ $pet->owner->surname }}</h2>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ action(($action == "create") ? 'PetsController@store' : 'PetsController@update', $pet->id) }}" method="post">
    @csrf
    <input type="hidden" name="owner_id" value="{{ $pet->owner_id }}">
    <label for="">Name: </label>
    <input type="text" name="name" value="{{ old('name', $pet->name)}}">
    <br><br>
    <label for="specie_id">Species: </label>
    <select name="specie_id" id="specie_id">
        <option {{ old('specie_id', $pet->specie_id) == 1 ? "selected" : ""}} value="1">Dog</option>
        <option {{ old('specie_id', $pet->specie_id) == 2 ? "selected" : ""}} value="2">Cat</option>
        <option {{ old('specie_id', $pet->specie_id) == 3 ? "selected" : ""}} value="3">Parrot</option>
        <option {{ old('specie_id', $pet->specie_id) == 4 ? "selected" : ""}} value="4">Snake</option>
      </select>
    <br><br>
    <label for="">Breed: </label>
    <input type="text" name="breed" value="{{ old('breed', $pet->breed)}}">
    <br><br>
    <label for="">Age: </label>
    <input type="text" name="age" value="{{ old('age', $pet->age)}}">
    <br><br>
    <label for="">Weight: </label>
    <input type="text" name="weight" value="{{ old('weight', $pet->weight)}}">
    <br><br>
    <label for="">Photo: </label>
    <input type="text" name="photo" value="{{ old('photo', $pet->photo)}}">
    <br><br>
    <button>Submit</button>
</form>