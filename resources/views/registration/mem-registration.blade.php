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
                <h5 style="color: white; font-style: italic; "><strong>Forget PSA ID? </strong>Click PSA ID Checker button. 
                    <br>
                    Enter your last name, and your PSA ID number will appear.</h5>
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