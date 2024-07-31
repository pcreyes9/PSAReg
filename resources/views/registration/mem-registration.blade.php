@extends('home.master')

@section('title', 'Members Register')
{{-- @section('banner-name', 'PSA MEMBERS REGISTRATION') --}}

@section('content')
{{-- @include('home.banner') --}}

<section id="main-container" class="pb-2 main-container text-center project-area ">
    <div class="container">
        <div class="row justify-content-center mb-2" data-animation-in="slideInLeft" data-duration-in="1.2">
            <div class="col-lg-12" >
                <h3 class="into-sub-title" style="color: white">PSA MEMBERS REGISTRATION</h3>
                <h5 style="color: white; font-style: italic; "><strong>Forgot your PSA ID? </strong>Click PSA ID Checker button</h5>
                <p class="mt-n2" style="color: white; font-style: italic; ">Enter your last name, and your PSA ID no. will appear</p>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        
        <livewire:mem-reg/>
    </div>
</section><!-- Main container end -->
@endsection