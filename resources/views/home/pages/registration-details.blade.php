@extends('home.master')

@section('title', 'Register')
{{-- @section('banner-name', 'REGISTRATION') --}}

@section('content')
{{-- @include('home.banner') --}}

<section id="main-container" class="pb-4 main-container text-center project-area ">
    <div class="container">
        <div class="row justify-content-center mb-5" data-animation-in="slideInLeft" data-duration-in="1.2">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col-lg-12 mb-3" >
                <h3 class="into-sub-title" style="color: white">PSA 56<sup style="text-transform: lowercase">th</sup> Annual Convention Registration</h3>
                <h3 class="section-header" style="color: white">27<sup style="text-transform: lowercase">th</sup> - 29<sup style="text-transform: lowercase">th</sup> <strong >November</strong>  2024 |  Manila Marriott Hotel</h3>
                {{-- <h3 class="into-sub-title" style="color: white">WEBSITE IS UPDATING... KINDLY RETURN AFTER 10 MINS. THANK YOU!</h3>
                <br>
                <br> --}}
            </div>
            
            <div class="d-grid my-4">
                <a href="{{route('memReg')}}" class="btn btn-primary mt-3" style="font-size: 20px; background: #d6cb00; color: #000066">Members Registration</a>
                <a href="{{route('nonMemReg')}}" class="btn btn-dark mt-3 ml-sm-3 " style="font-size: 20px;; ">Non-Members Registration</a>
            </div>
            <a class="gallery-popup wrapper" href="images/Annual Convention 2024 Registration Rates.png">
                <img class="img-fluid w-75 zoom fade-img" style="box-shadow: 3px 3px 5px;" src="images/Annual Convention 2024 Registration Rates.png" alt="">
            </a>
        </div>
        
    </div>
</section><!-- Main container end -->
@endsection