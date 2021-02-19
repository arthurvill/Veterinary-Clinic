<h2>Create a new pet for {{-- {{ $id }} --}}</h2>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ action('PetsController@store', $id) }}" method="post">
    @csrf
    <label for="">Name: </label>
    <input type="text" name="first_name" value="{{ old('name', $pet->name)}}">
    <br><br>
    <label for="">Species: </label>
    <input type="text" name="surname" value="{{ old('specie_id', $pet->specie_id)}}">
    <br><br>
    <label for="">Breed: </label>
    <input type="text" name="address" value="{{ old('address', $pet->breed)}}">
    <br><br>
    <label for="">Age: </label>
    <input type="text" name="email" value="{{ old('email', $pet->age)}}">
    <br><br>
    <label for="">Weight: </label>
    <input type="text" name="phone" value="{{ old('phone', $pet->weight)}}">
    <br><br>
    <label for="">Photo: </label>
    <input type="text" name="phone" value="{{ old('photo', $pet->photo)}}">
    <br><br>
    <button>Submit</button>
</form>