<h2>Create a new pet owner</h2>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ action('OwnersController@store') }}" method="post">
    @csrf
    <label for="">First name: </label>
    <input type="text" name="first_name" value="{{ old('first_name', $owner->first_name)}}">
    <br><br>
    <label for="">Surname: </label>
    <input type="text" name="surname" value="{{ old('surname', $owner->surname)}}">
    <br><br>
    <button>Submit</button>
</form>