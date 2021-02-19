@if(Session::has('success_message'))
    <div class="alert alert-success">
        {{ Session::get('success_message') }}
    </div>
@endif

<h1>Clinic's clients</h1>

<h3>Search by pet name</h3>
<form action="{{ action('PetsController@search') }}">
  
  <label for="">Name: </label>
  <input type="text" name="name"><br>
  <button>Search</button>
    
</form>

<h3>Search by owner's name</h3>
<form action="{{ action('OwnersController@search') }}">
   
  <label for="">First name: </label>
  <input type="text" name="first_name"><br>
  <label for="">Surname: </label>
  <input type="text" name="surname"><br>
  <button>Search</button>
    
</form>

<button><a href="{{ action("OwnersController@create") }}">Create a new pet owner</a></button>

<ul>

@foreach ($owners as $owner)
  <h3>Owner: <a href="{{ action("OwnersController@show", $owner->id) }}"> {{" " . $owner->first_name . " " . $owner->surname }} </a> </h3>

 <ul>
  @foreach ($owner->pets as $pet)

  <li> <a href="{{ action("PetsController@show", $pet->id) }}"> {{" " . $pet->name}} </a> </li>
      
   
      
  @endforeach
</ul>
@endforeach

</ul>
