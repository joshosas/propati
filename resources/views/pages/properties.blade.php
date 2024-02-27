@include('partials._footer')

<h1 class="display-5 my-5 text-center animated fadeIn mb-4">All Properties</h1>
@include('partials._search')

@unless(count($houses) == 0)
<x-property_wrapper>
    @foreach($houses as $house)
    <x-property_card :house="$house" />
    @endforeach
</x-property_wrapper>
<div class="d-flex justify-content-center mt-4">
    {{ $houses->links() }} <!-- Pagination links -->
</div>
@else
<h5>No Property Available!</h5>

@endunless

@include('partials._footer')