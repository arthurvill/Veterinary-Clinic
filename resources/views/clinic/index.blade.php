<h1>Clinic's clients</h1>


<ul>

@foreach ($owners as $owner)
  <h3>Owner:{{" " . $owner->first_name . " " . $owner->surname }}</h3>
 <ul>
  @foreach ($owner->pets as $pet)

  <li> {{" " . $pet->name}}</li>
      
  @endforeach
</ul>
@endforeach

</ul>
