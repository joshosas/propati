<x-layout>

    <h2><a href="/houses/{{$house->id}}">Title: {{$house->title}}</a></h2>
    <p>Description: {{$house->description}}</p>
    <p>Price: {{$house->price}}</p>
    <p>City: {{$house->city}}</p>
    <p>State: {{$house->state}}</p>
    <p>Bedrooms: {{$house->bedrooms}}</p>
    <p>Bathrooms: {{$house->bathrooms}}</p>
    <p>Square_footage: {{$house->square_footage}}</p>

</x-layout>