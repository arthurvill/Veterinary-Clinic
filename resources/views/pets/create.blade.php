<h2>Create a new pet for {{ $owner->first_name }} {{ $owner->surname }}</h2>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ action('PetsController@store', $owner->id) }}" method="post">
    @csrf
    <label for="">Name: </label>
    <input type="text" name="name" value="{{ old('name', $pet->name)}}">
    <br><br>
    <label for="specie_id">Species: </label>
    <select name="specie_id" id="specie_id">
        <option value="1" selected>Dog</option>
        <option value="2">Cat</option>
        <option value="3">Parrot</option>
        <option value="4">Snake</option>
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