@include('partials._spinner')

@include('partials._nav')

<!-- Back Button -->
<div class="container mt-3">
    <a href="/houses/manage" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Add Property Information</div>
                <div class="card-body">
                    <form action="/houses" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter property title" value="{{ old('title') }}">
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter property description (optional)">{{ old('description') }}</textarea>
                            @error('description')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" value="{{ old('price') }}">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" value="{{ old('city') }}">
                            @error('city')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control" id="state" name="state" placeholder="Enter state" value="{{ old('state') }}">
                            @error('state')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="zip_code" class="form-label">Zip Code</label>
                            <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Enter zip code (optional)" value="{{ old('zip_code') }}">
                            @error('zip_code')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="bedrooms" class="form-label">Bedrooms</label>
                            <input type="number" class="form-control" id="bedrooms" name="bedrooms" placeholder="Enter number of bedrooms" value="{{ old('bedrooms') }}">
                            @error('bedrooms')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="bathrooms" class="form-label">Bathrooms</label>
                            <input type="number" class="form-control" id="bathrooms" name="bathrooms" placeholder="Enter number of bathrooms" value="{{ old('bathrooms') }}">
                            @error('bathrooms')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="square_footage" class="form-label">Square Footage</label>
                            <input type="number" class="form-control" id="square_footage" name="square_footage" placeholder="Enter square footage (optional)" value="{{ old('square_footage') }}">
                            @error('square_footage')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="lot_size" class="form-label">Lot Size</label>
                            <input type="number" class="form-control" id="lot_size" name="lot_size" placeholder="Enter lot size (optional)" value="{{ old('lot_size') }}">
                            @error('lot_size')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="year_built" class="form-label">Year Built</label>
                            <input type="number" class="form-control" id="year_built" name="year_built" placeholder="Enter year built (optional)" value="{{ old('year_built') }}">
                            @error('year_built')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="property_type" class="form-label">Property Type</label>
                            <select class="form-select" id="property_type" name="property_type">
                                <option value="">Select property type</option>
                                <option value="Apartment">Apartment</option>
                                <option value="Office">Office</option>
                                <option value="Shop">Shop</option>
                                <option value="Land">Land</option>
                            </select>
                            @error('property_type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="sale_rent" class="form-label">For Sale/Rent</label>
                            <select class="form-select" id="sale_rent" name="sale_rent">
                                <option value="">Select sale or rent</option>
                                <option value="Sale">Sale</option>
                                <option value="Rent">Rent</option>
                            </select>
                            @error('sale_rent')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image (optional)</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Upload image">
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="amenities" class="form-label">Amenities</label>
                            <input type="text" class="form-control" id="amenities" name="amenities" placeholder="Enter amenities (optional)" value="{{ old('amenities') }}">
                            @error('amenities')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contact_name" class="form-label">Contact Name</label>
                            <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Enter contact name" value="{{ old('contact_name') }}">
                            @error('contact_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contact_email" class="form-label">Contact Email</label>
                            <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Enter contact email (optional)" value="{{ old('contact_email') }}">
                            @error('contact_email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contact_phone" class="form-label">Contact Phone</label>
                            <input type="text" class="form-control" id="contact_phone" name="contact_phone" placeholder="Enter contact phone" value="{{ old('contact_phone') }}">
                            @error('contact_phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="additional_details" class="form-label">Additional Details</label>
                            <textarea class="form-control" id="additional_details" name="additional_details" rows="3" placeholder="Enter additional details (optional)">{{ old('additional_details') }}</textarea>
                            @error('additional_details')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add Property</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials._footer')