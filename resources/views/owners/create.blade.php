<h2>{{ $action == "create" ? "Create a new pet owner" : "Edit pet owner" }}</h2>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ action(($action == "create") ? 'OwnersController@store' : 'OwnersController@update', $owner->id) }}" method="post">
    @csrf
    <label for="">First name: </label>
    <input type="text" name="first_name" value="{{ old('first_name', $owner->first_name)}}">
    <br><br>
    <label for="">Surname: </label>
    <input type="text" name="surname" value="{{ old('surname', $owner->surname)}}">
    <br><br>
    <label for="">Address: </label>
    <input type="text" name="address" value="{{ old('address', $owner->address)}}">
    <br><br>
    <label for="">E-mail: </label>
    <input type="text" name="email" value="{{ old('email', $owner->email)}}">
    <br><br>
    <label for="">Phone: </label>
    <input type="text" name="phone" value="{{ old('phone', $owner->phone)}}">
    <br><br>
    <button>Submit</button>
</form>