@extends('layouts.app')

@section('header_title', 'VISA POCESSING')
@section('sub_title', 'VISA POCESSING')
@section('prev_page_link', 'services')
@section('content')   


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pt-1 pb-3">
            <div class="row">
                
                <div class="col-md-4 ">
                    <div class="d-flex mb-4 ml-6 mb-lg-0">
                        <div class="d-flex flex-column">
                            <h5 class="text-center mt-4 ml-5">uganda</h5>
                            
                        </div>
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center ml-5 " style="height: 100px; width: 100px;">
                            <img src="/img/uganda.png" class="rounded" style="height: 100px; width: 100px; alt="...">
                        </div>
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center mr-5 mt-4">
                        <i class="fas fa-4x fa-plane text-primary"></i>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="mt-4">kenya</h5>
                            
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- Feature End -->
            <div class="mb-5 p-2">
                
                <div class="d-flex align-items-center text-decoration-none bg-white mb-3">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                        <i class="fas fa-4x fa-passport text-white"></i>
                    </div>
                    
                    <div class="pl-3">
                        <h6 class="m-1">Tourist Visa is Required
You need a visa to travel to this country. Please use our website to contact our reservation team to help you to apply for visa. Safe Travels!</h6>
                        
                    </div>
                </div>
            </div>
        
    

            <!-- Booking form Start -->
    
            <div class="text-start mb-2 pb-2">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Livingstonia safaris also deal in visa processing in Uganda catering for all types of clients that would require to fly </h6>
                
            </div>
            <form action="" method="">
                <div class="row bg-white">
                    
                    <div class="col-lg-6 col-md-12 col-sm-12  p-2">
                        
                            <h5>step1: Contact info</h5>
                            <div class="p-2">
                                <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="form-control p-4"  placeholder="email@email.com"/>
                                     <br>
                                
                                <label for="numberofpeople" class="form-label">Phone</label>
                                    <input type="text" class="form-control p-4"  placeholder="+256 700 000 000"/>
                                     <br>   

                                <label for="numberofrooms" class="form-label">Adress</label>
                                    <input type="text" class="form-control p-4"  placeholder="Kampala, Uganda"/>
                                    <br>
                                    

                            </div>
                        
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12  p-2">
                        
                            <h5>step2: Personal Info</h5>
                            <div class="p-2">                           
                                
                                
                                <div class="control-group">
                                    <label for="nameinput" class="form-label">First and Last name</label>
                                    <input type="text" class="form-control p-2" placeholder="e.g. Livingstonia Safari" />
                                     <br>  
                                    <label for="Gender" class="form-label">Gender</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender"  value="male">
                                        <label class="form-check-label" >male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender"  value="female">
                                        <label class="form-check-label" >female</label>
                                    </div>
                                     <br>  
                                    <label for="status" class="form-label">Marital Status</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status"  value="male">
                                        <label class="form-check-label" >Single</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status"  value="female">
                                        <label class="form-check-label" >married</label>
                                    </div>  
                                </div>
                            </div>                  
                    </div>
                                 
                    

                
                    
                    <div class="col-lg-6 col-md-12 col-sm-12  p-2">
                        
                            <h5>step3: Passport info</h5>
                            <div class="p-2">
                                <label for="numberofpeople" class="form-label">Nationality</label>
                                    <input type="number" class="form-control p-2"  placeholder="Number of people"/>
                                     <br>
                                <label for="numberofpeople" class="form-label">Travel To</label>
                                    <input type="number" class="form-control p-2"  placeholder="Number of people"/>
                                     <br>      
                                
                                <label for="numberofpeople" class="form-label">Passport issue date</label>
                                    <input type="number" class="form-control p-2"  placeholder="Number of people"/>
                                     <br>   

                                <label for="numberofrooms" class="form-label">Passport issue date</label>
                                    <input type="number" class="form-control p-2" id="subject" placeholder="Number of rooms"/>
                                    <br>
                                <label for="numberofrooms" class="form-label">Passport number</label>
                                    <input type="number" class="form-control p-2" id="subject" placeholder="Number of rooms"/>
                                    <br>    

                            </div>
                        
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        
                            <h5>step4: Personal Info</h5>
                            <div class="p-2">                           
                                
                                
                                <div class="control-group">
                                    <label for="nameinput" class="form-label">First and Last name</label>
                                    <input type="text" class="form-control p-2" placeholder="e.g. Livingstonia Safari" />
                                     <br>  
                                    <label for="nameinput" class="form-label">Gender</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender"  value="male">
                                        <label class="form-check-label" >male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender"  value="female">
                                        <label class="form-check-label" >female</label>
                                    </div>  
                                </div>
                            </div>                  
                    </div>
                                 
                    

                </div>

                <div class="row bg-white ">
                    <div class="d-grid  p-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

                
            </form>
        </div>
    </div>
    <!--Booking form End -->

   @endsection