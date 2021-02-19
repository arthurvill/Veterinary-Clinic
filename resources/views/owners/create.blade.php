<h2>Create a new pet owner</h2>

<form action="{{ action('OwnersController@store') }}" method="post">

    <input type="text" name="first_name" value="{{ old('first_name', $owner->first_name)}}">

</form>