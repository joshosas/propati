<!-- component/property_card -->

@props(['house'])
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

    <div class="property-item rounded overflow-hidden">
        <div class="position-relative overflow-hidden">
            <a href="/houses/{{$house->id}}"><img class="img-fluid" src="{{$house->image ? asset('storage/' . $house->image) : asset('/img/property-1.jpg')}}" alt=""></a>
            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For {{$house->sale_rent}}</div>
            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{$house->property_type}}</div>
        </div>
        <div class="p-4 pb-0">
            <h5 class="text-primary mb-3">${{$house->price}}</h5>
            <a class="d-block h5 mb-2" href="/houses/{{$house->id}}">{{$house->title}}</a>
            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$house->city}}</p>
        </div>
        <div class="d-flex border-top">
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{$house->square_footage}} Sqft</small>
            <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>{{$house->bedrooms}} Bed</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{$house->bathrooms}} Bath</small>
        </div>
    </div>
</div>