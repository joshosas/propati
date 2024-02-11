<x-layout>

    @include('partials._header')
    @include('partials._search')

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

<!-- <h2>Lorem Ipsum</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem nam saepe, pariatur sunt dolor odio ratione illum tempore amet, error quibusdam similique tenetur corrupti itaque ex modi, explicabo hic porro.</p> -->