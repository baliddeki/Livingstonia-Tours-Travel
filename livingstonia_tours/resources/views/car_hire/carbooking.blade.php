@extends('layouts.app')
@section('header_title', 'SUBMIT CAR HIRE ORDER')
@section('sub_title', 'SUBMIT CAR HIRE ORDER')
@section('prev_page_link', 'CAR HIRE SERVICES')

@section('content')


<!-- Form Start -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <h3 class="mb-4">Car Booking Form</h3>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" required>
                    @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="dateOfDeparture" class="form-label">Date of Departure</label>
                    <input type="date" class="form-control @error('dateOfDeparture') is-invalid @enderror" id="dateOfDeparture" name="dateOfDeparture" required>
                    @error('dateOfDeparture')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="currentAddress" class="form-label">Current Address</label>
                    <input type="text" class="form-control @error('currentAddress') is-invalid @enderror" id="currentAddress" name="currentAddress" required>
                    @error('currentAddress')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="destinationAddress" class="form-label">Destination Address</label>
                    <input type="text" class="form-control @error('destinationAddress') is-invalid @enderror" id="destinationAddress" name="destinationAddress" required>
                    @error('destinationAddress')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="daysOfStay" class="form-label">Days Of stay</label>
                    <input type="text" class="form-control @error('daysOfStay') is-invalid @enderror" id="daysOfStay" name="daysOfStay" required>
                    @error('daysOfStay')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="estimatedParticipates" class="form-label">Estimate Persons</label>
                    <input type="text" class="form-control @error('estimatedParticipates') is-invalid @enderror" id="estimatedParticipates" name="estimatedParticipates" required>
                    @error('estimatedParticipates')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit Booking</button>
            </form>
        </div>
    </div>
</div>
<!-- booking form -->
@endsection