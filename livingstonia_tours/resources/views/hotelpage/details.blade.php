@extends('layouts.app')

@section('content')
    
<!-- hotel images start -->
    <div class="container-fluid py-5">
        <div class="container pt-2 pb-3">
            <div class="row">
                <div class="col">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset('img/about.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>                
                <!-- Right Column -->
                <div class="col">
                    <div class="about-text bg-white p-2 p-lg-5 my-lg-5">
                        <!-- Right Column Row 1 -->
                        <div class="row mb-1">
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('img/about-1.jpg') }}" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="{{ asset('img/about-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <!-- Right Column Row 2 -->
                        <div class="row mt-4">
                            <div class="col-6 mt-4">
                                <img class="img-fluid" src="{{ asset('img/about-1.jpg') }}" alt="">
                            </div>
                            <div class="col-6 mt-4">
                                <img class="img-fluid" src="{{ asset('img/about-2.jpg') }}" alt="">
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
                        <img class="img-fluid" src="{{ asset('img/package-1.jpg') }}" alt="">
                        <div class="p-1">
                            <h6>Double standard room</h6>
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>                          
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('img/package-1.jpg') }}" alt="">
                        <div class="p-1">
                            <h6>comfort single</h6>
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>                          
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('img/package-1.jpg') }}" alt="">
                        <div class="p-1">
                            <h6>Double fancy room</h6>
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>                          
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('img/package-1.jpg') }}" alt="">
                        <div class="p-1">
                            <h6>Double standard room</h6>
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
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
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Book (HN)</h6>
                
            </div>
            <form action="" method="">
                <div class="row bg-white">
                    
                    <div class="col  p-4">
                        
                            <h5>step1: </h5>
                            <div class="p-4">
                                <h6 class="text-primary " >Amenities</h6>
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Free Wifi</small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>Free Parking</small>
                                    <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>Air conditioning</small>
                                    
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Key card acess</small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                    <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                                    
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
                    <div class="d-grid gap-2 p-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

                
            </form>
        </div>
    </div>
    <!--Booking form End -->                                                                     


  @endsection 