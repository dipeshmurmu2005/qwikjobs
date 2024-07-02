<div class="px-12 py-10">
    <div class="section-header">
        <h1 class="font-bold text-2xl">Top Companies Hiring Now</h1>
        <div class="flex justify-between text-grey-text-color text-base mt-3">
            <span>2020 jobs live – 293 added today.</span>
        </div>
    </div>
    <div class="swiper companies-collection-slider mt-10">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <x-companies.collection />
            </div>
            <div class="swiper-slide">
                <x-companies.collection />
            </div>
            <div class="swiper-slide">
                <x-companies.collection />
            </div>
            <div class="swiper-slide">
                <x-companies.collection />
            </div>
            <div class="swiper-slide">
                <x-companies.collection />
            </div>
            <div class="swiper-slide">
                <x-companies.collection />
            </div>
        </div>
    </div>
    <script>
        var swiper = new Swiper(('.companies-collection-slider'), {
            slidesPerView: 4,
            spaceBetween:20,
        })
    </script>
</div>
