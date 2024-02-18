<!-- Search Start -->
<div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
    <div class="container">
        <div class="row g-2">
            <div class="col-md-10">
                <form action="{{ route('properties') }}" method="GET" class="row g-2">
                    <div class="col-md-4">
                        <input type="text" name="search" class="form-control border-0 py-3" placeholder="Search apartment">
                    </div>
                    <div class="col-md-3">
                        <select name="property_type" class="form-select border-0 py-3">
                            <option value="" selected>Property Type</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Shop">Shop</option>
                            <option value="Office">Office</option>
                            <option value="Land">Land</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="location" class="form-select border-0 py-3">
                            <option value="" selected>Location</option>
                            <option value="Oredo, Benin">Oredo, Benin</option>
                            <option value="Ovia NE, Benin">Ovia NE, Benin</option>
                            <option value="Egor, Benin">Egor, Benin</option>
                            <option value="Ikpoba, Benin">Ikpoba, Benin</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Abuja">Abuja</option>
                            <option value="Asaba">Asaba</option>
                            <option value="Warri">Warri</option>
                            <option value="Ekpoma">Ekpoma</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search End -->