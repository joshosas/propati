<x-layout>

    @unless(count($houses) == 0)

    @foreach($houses as $house)
    <h2><a href="/houses/{{$house->id}}">Title: {{$house->title}}</a></h2>
    <p>Description: {{$house->description}}</p>
    <p>Price: {{$house->price}}</p>
    @endforeach

    @else
    <h5>No House Found!</h5>

    @endunless

</x-layout>