@extends('layouts.app')
@section('header_title', 'CAR HIRE SERVICES')
@section('sub_title', 'CAR HIRE SERVICES')
@section('prev_page_link', 'services')

@section('content')

<!-- Car hire categories -->
<!-- Wrap the cards in a container -->
<div class="container">
    <div class="row">
        @foreach($cars as $car)
        <!-- Add multiple card elements with the car information -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ $car->cImage }}" class="card-img-top" alt="{{ $car->cName }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $car->cName }}</h5>
                    <p class="card-text">{{ $car->cDescription }}</p>
                    <p class="card-text">Unit: {{ $car->cUnit }}</p>
                    <a href="{{  route('carbooking')  }}" class="btn btn-primary">Rent Now</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection