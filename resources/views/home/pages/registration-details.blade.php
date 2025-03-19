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
                <br>
                <br>
                <h3 class="into-sub-title" style="color: #f2de02">PRE-REGISTRATION HAS ENDED</h3>
                <br>
                <br>
            </div>
            
            <div class="d-grid my-4">
                {{-- <a href="{{route('memReg')}}" class="btn btn-primary mt-3" style="font-size: 20px; background: #d6cb00; color: #000066">Members Registration</a>  --}}
                {{-- <a href="{{route('nonMemReg')}}" class="btn btn-dark mt-3 ml-sm-3 " style="font-size: 20px;; ">Non-Members Registration</a>  --}}
            </div>
                {{-- <iframe 
                    class="m-4"
                    width="560" height="315" 
                    src="https://www.youtube.com/embed/1QSqEOIxSo0?si=L6XZBYZCmDcp8qIT" 
                    title="YouTube video player" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" 
                    allowfullscreen>
                </iframe> --}}
              
            
            <a class="gallery-popup wrapper" href="images/Annual Convention 2024 Registration Rates.png">
                <img class="img-fluid w-75 zoom fade-img" style="box-shadow: 3px 3px 5px;" src="images/Annual Convention 2024 Registration Rates.png" alt="">
            </a>
        </div>
        
    </div>
</section><!-- Main container end -->
@endsection