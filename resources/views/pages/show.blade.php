@include('partials._nav')

@include('partials._back')

<!-- Single Listing Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Single Listing Information -->
            <div class="property-item rounded overflow-hidden mb-4">
                <img class="img-fluid" src="{{ $house->image ? asset('storage/' . $house->image) : asset('img/property-1.jpg') }}" alt="">
                <div class="p-4">
                    <h5 class="text-primary mb-3">{{ $house->title }}</h5>
                    <p>{{ $house->description }}</p>
                    <p><strong>Price:</strong> ${{ $house->price }}</p>
                    <p><strong>Location:</strong> {{ $house->city }}, {{ $house->state }}, {{ $house->zip_code }}</p>
                    <p><strong>Bedrooms:</strong> {{ $house->bedrooms }}</p>
                    <p><strong>Bathrooms:</strong> {{ $house->bathrooms }}</p>
                    <p><strong>Square Footage:</strong> {{ $house->square_footage }} Sqft</p>
                    <p><strong>Lot Size:</strong> {{ $house->lot_size }}</p>
                    <p><strong>Year Built:</strong> {{ $house->year_built }}</p>
                    <p><strong>Property Type:</strong> {{ $house->property_type }}</p>
                    <p><strong>For:</strong> {{ $house->sale_rent }}</p>
                    <p><strong>Amenities:</strong> {{ $house->amenities }}</p>
                    <p><strong>Contact Name:</strong> {{ $house->contact_name }}</p>
                    <p><strong>Contact Email:</strong> {{ $house->contact_email }}</p>
                    <p><strong>Contact Phone:</strong> {{ $house->contact_phone }}</p>
                    <p><strong>Additional Details:</strong> {{ $house->additional_details }}</p>
                </div>
            </div>
            <div class="mt-4 p-2 flex space-x-6">
                <a href="/houses/{{$house->id}}/edit">
                    <i class="fa-solid fa-pencil me-1"></i>Edit
                </a>

                <form action="/houses/{{$house->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Property?')">
                    @csrf
                    @method('DELETE')
                    <button class=" text-danger-500">
                        <i class="fa-solid fa-trash"></i>Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('partials._footer')