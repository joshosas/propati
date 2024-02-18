<x-layout>

    @include('partials._header')

    @unless(count($houses) == 0)
    <x-property_wrapper>
        @foreach($houses as $house)
        <x-property_card :house="$house" />
        @endforeach
    </x-property_wrapper>
    @else
    <h5> </h5>

    @endunless

</x-layout>

<!-- <h2>Lorem Ipsum</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem nam saepe, pariatur sunt dolor odio ratione illum tempore amet, error quibusdam similique tenetur corrupti itaque ex modi, explicabo hic porro.</p> -->