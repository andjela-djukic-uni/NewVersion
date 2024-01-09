@props(['testimonials'])

<section class="testimonials">
    <h1>Testimonials</h1>

    <div class="swiper testimonials-slider">
        <div class="swiper-wrapper">
            @foreach ($testimonials as $testim)
            <div class="swiper-slide">
                        
                <p>{{$testim->testimonial}}</p>
                <h3>{{$testim->name}}, {{$testim->location}}</h3>
            
            
            </div>
            @endforeach
        </div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
         

