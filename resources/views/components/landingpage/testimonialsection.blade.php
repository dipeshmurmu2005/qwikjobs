<div class="testimonial-section px-12 py-10 bg-light-yellow-color">
    <div class="section-header flex flex-col items-center">
        <h1 class="font-bold text-2xl">What our customer says ?</h1>
        <p class="text-grey-text-color mt-2">Don't take our word for it, take theirs!</p>
    </div>

    <div class="swiper testimonials-slider mt-10">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <x-essentials.testimonial />
            </div>
            <div class="swiper-slide">
                <x-essentials.testimonial />
            </div>
            <div class="swiper-slide">
                <x-essentials.testimonial />
            </div>
            <div class="swiper-slide">
                <x-essentials.testimonial />
            </div>
            <div class="swiper-slide">
                <x-essentials.testimonial />
            </div>
            <div class="swiper-slide">
                <x-essentials.testimonial />
            </div>
        </div>
    </div>
    <script>
        var swiper = new Swiper(('.testimonials-slider'), {
            slidesPerView: 3,
            spaceBetween: 20,
        })
    </script>
</div>
