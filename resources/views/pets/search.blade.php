<h1>Pets</h1>

<ul>
    @foreach ($pets as $pet)
        <li>
            <a href="()">{{ $pet->name }}</a>
        </li>
    @endforeach
</ul>