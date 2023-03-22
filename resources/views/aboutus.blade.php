@extends('layouts.app')
@section('content')
    <div class="card  m-1">
        <div class="card-header bg-custom">
            <a class="text-decoration-none text-success" href="{{ url('user') }}">Home</a> / About Us   
        </div>
        <div class="card-body ">

            <!-- About Start -->
            <div class="container py-5">
                <div class="container">
                    <div class="row  my-4">
                    
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                            <h1 class="display-5 mb-4">We Help Our Clients To Grow Knowledge</h1>
                            <p class="mb-4">Introduction to online examination system features to manage your online exam test with an objective & subjective assessments using exam software.</p>
                            <div class="border rounded p-4">
                                <nav>
                                    <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                        <button class="nav-link text-danger fw-bold active" id="nav-story-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-story" type="button" role="tab"
                                            aria-controls="nav-story" aria-selected="true">Story</button>
                                        <button class="nav-link text-danger fw-bold" id="nav-mission-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-mission" type="button" role="tab"
                                            aria-controls="nav-mission" aria-selected="false">Mission</button>
                                        <button class="nav-link text-danger fw-bold" id="nav-vision-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-vision" type="button" role="tab"
                                            aria-controls="nav-vision" aria-selected="false">Vision</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-story" role="tabpanel"
                                        aria-labelledby="nav-story-tab">
                                        <p>
                                            Our work is guided by these values, and we are committed to: <br>
                                            
                                            Excellence in all we do <br>
                                            Collaboration within and beyond the University <br>
                                            Innovation to find and apply best practices <br>
                                    </p>
                                        
                                    </div>
                                    <div class="tab-pane fade" id="nav-mission" role="tabpanel"
                                        aria-labelledby="nav-mission-tab">
                                        <p>Testing Center is to assist in the promotion of academic integrity through the supervision of examinations in a private testing facility. <br> We endeavor to achieve this mission by: <br>Providing a quiet, proctored testing facility
                                            <br> Utilizing the latest technologies to ensure academic integrity and fairness</p>
                                        
                                    </div>
                                    <div class="tab-pane fade" id="nav-vision" role="tabpanel"
                                        aria-labelledby="nav-vision-tab">
                                        <p>The Teaching Center will be nationally and internationally recognized as a model resource center for teaching, learning and technology in higher education. </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded my-4  p-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h4>   <i class="fa mx-2 fa-users "></i> Dedicated Team</h4>
                        <span>A dedicated team structure is a structure in which the project is outsourced to remote developers</span>
                    </div>
                    <div class="border rounded my-4 p-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h4>  <i class="fa mx-2 fa-phone "></i> 24/7 Available</h4>
                        <span>By being available 24/7 for your customers</span>
                    </div>

                </div>
            </div>
            <!-- About End -->
            
        </div>
    </div>
@endsection
