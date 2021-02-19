<h1>Clinic's clients</h1>


<ul>

@foreach ($owners as $owner)
  <h3>owners name:{{ $owner->first_name . $owner->surname }}</h3>
  @foreach ($owner->pets as $pet)
    {{  }}
      
  @endforeach
@endforeach

</ul>
