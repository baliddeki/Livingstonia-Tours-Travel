@extends('layouts.app')

@section('header_title', 'VISA POCESSING')
@section('sub_title', 'VISA POCESSING')
@section('prev_page_link', 'services')
@section('content')   


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Explore Visas</h6>
                <h4>For many destinations around the world, a visa is required to be able to enter a country. To find out whether you need a visa, simply click on the country you are planning to visit below.</h4>
            </div>
                @foreach($countries as $country)
                    <a class="col-md-4  text-primary" href="{{route('country.visa', ['country' => $country->id])}}">
                        <div class="d-flex mb-4 mb-lg-0">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center  mr-3" style="height: 100px; width: 100px; ">
                                <img src="/img/uganda.png" class="rounded" style="height: 100px; width: 100px;object-fit: cover;" alt="...">
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class="text-center mt-4">{{$country->name}}</h5>
                                
                            </div>
                        </div>
                    </a>
                @endforeach
                
        </div>
    </div>
    <!-- Feature End -->


   @endsection