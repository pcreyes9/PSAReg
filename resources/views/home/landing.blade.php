
@extends('home.master')

@section('title', 'Home')

@section('content')
  <div class="mb-0 banner-carousel banner-carousel-1">
    <div class="banner-carousel-item" style="background-image:url(images/slider-main/slider4.jpg)">
      <div class="slider-content">
        <div class="container h-100">
          <div class="row ">
            <div class="text-center col-md-12">
              <h2 class="slide-title" style="margin-top: 40px !important;"  data-animation-in="slideInLeft">The 24th ASEAN Congress of Anesthesiologists</h2>
              <p class="slider-p" data-animation-in="slideInRight">
                In conjunction with the 35th Annual Convention of the Philippine Society of Anesthesiologists
              </p>
              <h5 class="slide-sub-title" style="margin-top: 350px;" data-animation-in="slideInRight">Shaping the Future
                of Perioperative Patient Care
              </h5>
              <p class="slider-p" data-animation-in="slideInLeft">
                MARRIOTT GRAND BALLROOM | October 23 - 25, 2025
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="ts-features" class="ts-features">
    <div class="container" >
      <div class="row justify-content-center" data-animation-in="slideInLeft" data-duration-in="1.2">
        <div class="mt-3 col-lg-9 " >
          <h3 class=" into-sub-title" >Dear All 24th ACA 2025 Participants,</h3>
          <p class="hotel-p">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper nunc nec ornare ornare. Nam sagittis elit ac ligula bibendum condimentum. In sodales, neque et tincidunt congue, lorem dui interdum arcu, id lobortis tortor nibh quis magna. Pellentesque sit amet semper turpis, non feugiat tellus. Duis malesuada nibh nec suscipit volutpat. 
            <br>
            <br>
            Phasellus ut enim id turpis euismod fermentum quis eu eros. Vestibulum rhoncus ante tellus, a iaculis turpis placerat eget. Fusce vel libero id est ullamcorper sagittis. Integer ullamcorper lacus non justo tincidunt porttitor. Duis ornare sollicitudin mi quis dignissim. Duis imperdiet justo nec tellus pellentesque, vel porta eros sodales. Etiam et convallis odio. Mauris interdum tortor augue, in dictum leo congue eu. Morbi a mauris consectetur ipsum finibus ultricies.
            <br>
            <br>
            Nam ultricies est ac enim condimentum, id euismod ante porttitor. Nam bibendum cursus urna ac imperdiet. Cras semper, dolor fringilla molestie scelerisque, urna nulla consectetur justo, eu egestas urna ipsum quis purus. Pellentesque elementum in tellus eu volutpat. In sollicitudin est ex, eget pharetra risus scelerisque vitae. Sed dictum dolor nec mauris scelerisque efficitur sit amet vel quam. Nunc et rutrum est. Nunc tempor placerat diam, sit amet mattis eros semper nec.
          </p>
          <h2>
            Warm regards,
            <br>
            24th ACA 2025 Congress Organizing Committee
          </h2>
        </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </section><!-- Feature are end -->

  <section id="news" class="project-area solid-bg">
    <div class="container">
      <div class="row ">
        <div  class="col-lg-4 text-center"  >
          <a class="gallery-popup wrapper" href="images/PSA President 2024.jpg">
            <img id="slide" class="img-fluid w-75 zoom fade-img" src="images/PSA President 2024.jpg" alt="img" style="box-shadow: 3px 3px 5px;"> 
          </a>
        </div>
        
        <div class="col-lg-8 mt-4 mt-lg-0">
          {{-- <h3 class="into-sub-title">Our Values</h3> --}}
          <p class="hotel-p">Dear All,
            <br>
            <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas semper nunc nec ornare ornare. Nam sagittis elit ac ligula bibendum condimentum. In sodales, neque et tincidunt congue, lorem dui interdum arcu, id lobortis tortor nibh quis magna. Pellentesque sit amet semper turpis, non feugiat tellus. Duis malesuada nibh nec suscipit volutpat. 
            <br>
            <br>
            Phasellus ut enim id turpis euismod fermentum quis eu eros. Vestibulum rhoncus ante tellus, a iaculis turpis placerat eget. Fusce vel libero id est ullamcorper sagittis. Integer ullamcorper lacus non justo tincidunt porttitor. Duis ornare sollicitudin mi quis dignissim. Duis imperdiet justo nec tellus pellentesque, vel porta eros sodales. Etiam et convallis odio. Mauris interdum tortor augue, in dictum leo congue eu. Morbi a mauris consectetur ipsum finibus ultricies.
            <br>
            <br>
            Nam ultricies est ac enim condimentum, id euismod ante porttitor. Nam bibendum cursus urna ac imperdiet. Cras semper, dolor fringilla molestie scelerisque, urna nulla consectetur justo, eu egestas urna ipsum quis purus. Pellentesque elementum in tellus eu volutpat. In sollicitudin est ex, eget pharetra risus scelerisque vitae. Sed dictum dolor nec mauris scelerisque efficitur sit amet vel quam. Nunc et rutrum est. Nunc tempor placerat diam, sit amet mattis eros semper nec.
            <br>
            <br>              
            Best wishes and kind regards,
            <br>
            <br>
            <strong>
              Peñafrancia C. Cano
              <br>
              President, Philippine Society of Anesthesiologists
            </strong>    
          </p>
        </div><!-- Col end -->
      </div><!-- Row end -->
    </div>
    {{-- <hr class="solid" style="border-top: 2px solid #bbb;"> --}}
  </section>

  <div class = "d-none d-sm-block">
    @include('home.maps')
  </div>
@endsection
