@extends('layouts.app')

@section('content')

<section class="hero-section" style="
background:url('/images/hero2.jpg');
background-size:cover;
background-position:center;
background-repeat:no-repeat;
color:white;
padding:100px 0 50px 0;
min-hight:100vh;
display:flex;
align-items:center;
">
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="display-4 fw-bold mb-4" style="color:white; font-weight:5rem !important;"> Track Your Marks With No Stress</h1>
            <p class="lead mb-5"> Marks Registration and Result Publication System -Your Accademic success simplified </p>
            <div class="mb-4">
                <h3 class="mb-4" style="color:white;"> Ready to Access Your Accademic Portal? </h3>
                <p class="mb-4"> join thousand of students and lecturers managing accademic result efficiently </p>
            </div>
             <div class="d-grid gap-3 d-md-flex justify-content-md-center">
                <a href="{{route('login')}}" class="btn btn-primary btn-custom me-md-3" style=" padding:12px 30px; font-size:1rem; border-radius:10px; max-width:200px;">
                    <i class="fas fa-sign-in-alt me-2"></i>Sign In 
                </a>
                <a href="{{route('register')}}" class="btn btn-primary btn-custom" style=" padding:12px 30px; font-size:1rem; border-radius:10px; max-width:200px;">
                    <i class="fas fa-user-plus me-2"></i>Create Account 
                </a>

             </div>
        </div>
    </div>
 </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-center text-dark-navy mb-4">Latest Announcements</h2>
                
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header bg-primary text-white" >
                        <h5 class="mb-0">System Launch</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Welcome to MRRPS! The new mark registration system is now live for all students and staff.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-gray-medium">Posted by Administration</small>
                            <small class="text-gray-medium">Dec 11, 2025</small>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header bg-primary text-white" >
                        <h5 class="mb-0">Semester Results</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">First semester results will be published on Jan 10th, 2026. Please ensure all marks are submitted by lecturers.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-gray-medium">Posted by Administration</small>
                            <small class="text-gray-medium">Dec 11, 2025</small>    
                        </div>
                    </div>
                </div>
                 <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header bg-primary text-white"  >
                        <h5 class="mb-0">Lecturer Training</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Training session for lecturers on using  MRRPS will be held next week.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-gray-medium">Posted by Administration</small>
                            <small class="text-gray-medium">Dec 11, 2025</small>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<style>
    .hero-section{
        
    }
    .news-section{
        padding:60px 0;
        background:lightgray;

    }
    h1,h2, h3{
        color:black;
    }
    .btn{
        padding:12px 70px;
        font-size:1.1rem;
        border-radius:30px;

    }
</style>
 @endsection 
