@extends('layout')

@section('content')

    <!-- Slideshow container -->
    <section class="home">
       <div class="swiper home-slider">
        <div class="swiper-wrapper">

        @foreach ($slides as $slide)

        <x-slide :slide="$slide" />

        @endforeach

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

       </div>
    </section>

    <!-- Slideshow container -->

    <!-- Button section -->
 <section class=buttons>
    <div class="volunteer">
        <a href="https://www.workaway.info/en/host/126446771921" class="btn">Become a volunteer</a>
    </div>

    <div class="help">
        <a href="contact" class="btn">I need help</a>
    </div>

    <div class="donate">
        <a href="donate" class="btn">Donate</a>
    </div>
 </section>

    <!-- Button section -->
    <!-- project box -->
    <x-project :projects=$projects />
    <!-- project box -->

    <!-- testimonials -->
    <x-testimonial :testimonials=$testimonials />
    <!-- testimonials -->


 <div class="support" style="background:url(img/donate.jpg) no-repeat">
 <div class="donate">
        <h1>Support Park Istra with donations!</h1>
        <a href="donate" class="btn">Donate</a>
</div>   
</div>

@endsection  