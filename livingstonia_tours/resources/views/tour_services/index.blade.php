@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
            <h1>Perfect Tour Packages</h1>
        </div>
        <div class="row">
            @foreach($tour_packages as $package)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                    <img class="img-fluid" src="{{ $package->image_url }}" alt="{{ $package->package_name }}">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{ $package->location }}</small>
                            <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>{{ $package->duration }}</small>
                            <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>{{ $package->capacity }} Person</small>
                        </div>
                        <a class="h5 text-decoration-none" href="">{{ $package->package_name }}</a>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between">
                                <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>{{ $package->rating }} <small>({{ $package->reviews }})</small></h6>
                                <h5 class="m-0">{{ $package->price }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection