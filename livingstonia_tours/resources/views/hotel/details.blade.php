@extends('layouts.app')
@section('header_title', 'HOTEL DETAILS')


@section('content')

<!-- hotel images start -->
    <div class="container-fluid py-5">
        <div class="container pt-2 pb-3">
            <a href="{{route('hotel.index') }}">Go back to Hotel Page</a>
            <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">{{$hotel->hName}}</h6>
            <h6 class="mb-3">{{$hotel->hDescription}}</h1>
            <div class="row">
                <div class="col">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('img/speke.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>                
                <!-- Right Column -->
                <div class="col">
                    <div class="about-text bg-white p-2 p-lg-5 my-lg-5">
                        <!-- Right Column Row 1 -->
                        <div class="row mb-1">
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('img/bed1.jpeg') }}" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('img/bed3.jpg') }}" alt="">
                            </div>
                        </div>
                        <!-- Right Column Row 2 -->
                        <div class="row mt-4">
                            <div class="col-6 mt-4">
                                <img class="img-fluid" src="{{ asset('img/bed4.jpg') }}" alt="">
                            </div>
                            <div class="col-6 mt-4">
                                <img class="img-fluid" src="{{ asset('img/bed5.jpg') }}" alt="">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Hotel images end -->

    <!-- Hotel rooms Start -->
    <div class="container-fluid py-5">
        <div class="container pt-1 pb-3">
            <div class="text-start ">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Rooms</h6>
                
            </div>
            <div class="row row-cols-4">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('img/bed1.jpeg') }}" alt="">
                        <div class="p-1">
                            <h6>Double standard room</h6>
                            <div class="d-flex flex-column mb-3">
                                <small class="m-0 p-1"><i class="far fa-square text-primary mr-2"></i>18 sqm</small>
                                <small class="m-0 p-1"><i class="fas fa-users text-primary mr-2"></i>2 people</small>
                                <small class="m-0 p-1"><i class="fas fa-bed text-primary mr-2"></i>1 queen bed or 2 separate beds</small>
                            </div>                          
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('img/bed3.jpg') }}" alt="">
                        <div class="p-1">
                            <h6>comfort single</h6>
                            <div class="d-flex flex-column mb-3">
                                <small class="m-0 p-1"><i class="far fa-square text-primary mr-2"></i>21 sqm</small>
                                <small class="m-0 p-1"><i class="fas fa-users text-primary mr-2"></i>2 people</small>
                                <small class="m-0 p-1"><i class="fas fa-bed text-primary mr-2"></i>1 king size bed</small>
                            </div>                          
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('img/bed4.jpg') }}" alt="">
                        <div class="p-1">
                            <h6>Double fancy room</h6>
                            <div class="d-flex flex-column mb-3">
                                <small class="m-0 p-1"><i class="far fa-square text-primary mr-2"></i>35 sqm</small>
                                <small class="m-0 p-1"><i class="fas fa-users text-primary mr-2"></i>2 people</small>
                                <small class="m-0 p-1"><i class="fas fa-bed text-primary mr-2"></i>1 king size bed or 2 separate beds</small>
                            </div>                          
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('img/bed5.jpg') }}" alt="">
                        <div class="p-1">
                            <h6>Double standard room</h6>
                            <div class="d-flex flex-column mb-3">
                                <small class="m-0 p-1"><i class="far fa-square text-primary mr-2"></i>18 sqm</small>
                                <small class="m-0 p-1"><i class="fas fa-users text-primary mr-2"></i>2 people</small>
                                <small class="m-0 p-1"><i class="fas fa-bed text-primary mr-2"></i>1 queen bed or 2 separate beds</small>
                            </div>                          
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Hotel rooms End -->

    <!-- Booking form Start -->
    <div class="container-fluid py-2">
        <div class="container pt-2 pb-2">
            <div class="text-start mb-2 pb-2">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Book {{$hotel->hName}}</h6>
                
            </div>
            <form action="{route(hotel.store)}" method="">
                @csrf
                <div class="row bg-white">
                    
                    <div class="col  p-4">
                        
                            <h5>step1: </h5>
                            <div class="p-4">
                                <h6 class="text-primary " >Amenities</h6>
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fas fa-wifi text-primary mr-2"></i>Free Wifi</small>
                                    <small class="m-0"><i class="fas fa-parking text-primary mr-2"></i>Free Parking</small>
                                    <small class="m-0"><i class="fas fa-air-conditioner text-primary mr-2"></i>Air conditioning</small>
                                    
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fas fa-address-card text-primary mr-2"></i>Key card acess</small>
                                    <small class="m-0"><i class="fas fa-swimming-pool text-primary mr-2"></i>Swimming pool</small>
                                    <small class="m-0"><i class="fas fa-dumbbell text-primary mr-2"></i>Gym</small>
                                    
                                </div>
                                <br>
                                
                                <label for="numberofpeople" class="form-label">Number of people</label>
                                    <input type="number" class="form-control p-4"  placeholder="Number of people"/>
                                     <br>   

                                <label for="numberofrooms" class="form-label">Number of rooms</label>
                                    <input type="number" class="form-control p-4" id="subject" placeholder="Number of rooms"/>
                                    <br>
                                    

                            </div>
                        
                    </div>

                    <div class="col  p-4">
                        
                            <h5>step2: Personal Data</h5>
                            <div class="p-4">                           
                                
                                
                                <div class="control-group">
                                    <label for="nameinput" class="form-label">First and Last name</label>
                                    <input type="text" class="form-control p-4" placeholder="e.g. Livingstonia Safari" />
                                     <br>  
                                    
                                    <label for="Email address" class="form-label">Email address</label>
                                    <input type="email" class="form-control p-4"  placeholder="email@email.com"/>
                                     <br>   

                                    <label for="phone number" class="form-label">phone number</label>
                                    <input type="text" class="form-control p-4"  placeholder="+256 700 000 000"/>
                                      <br>  
                                </div>
                            </div>                  
                    </div>             
                    

                </div>
                <div class="row bg-white ">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

                
            </form>
        </div>
    </div>
    <!--Booking form End -->                                                                     


  @endsection 