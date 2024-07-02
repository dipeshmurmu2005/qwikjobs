<div class="px-12 py-10 bg-light-primary-color">
    <div class="section-header">
        <h1 class="font-bold text-2xl">Featured Companies actively hiring</h1>
        <div class="flex justify-between text-grey-text-color text-base mt-3">
            <span>Over 100 Million Jobs</span>
            <a href="#"
                class="text-primary-color font-bold underline decoration-solid decoration-2 decoration-primary-color">View
                all jobs</a>
        </div>
    </div>


    <div class="swiper featured-companies-slider mt-10">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <x-companies.company />
            </div>
            <div class="swiper-slide">
                <x-companies.company />
            </div>
            <div class="swiper-slide">
                <x-companies.company />
            </div>
            <div class="swiper-slide">
                <x-companies.company />
            </div>
            <div class="swiper-slide">
                <x-companies.company />
            </div>
        </div>
    </div>
    <script>
        var swiper = new Swiper(('.featured-companies-slider'), {
            slidesPerView: 4,
            spaceBetween: 20,
        })
    </script>
</div>
