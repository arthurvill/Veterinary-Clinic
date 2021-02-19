@if(Session::has('success_message'))
    <div class="alert alert-success">
        {{ Session::get('success_message') }}
    </div>
@endif

<h1>Clinic's clients</h1>

<a href="{{ action("OwnersController@create") }}">Create a new pet owner</a>

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


Add owner - /owners/create