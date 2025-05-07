@if ($bannerTypeMainBanner->count() > 0)
<section class="banner-section custom-height">
    <div class="banner-new-slider owl-theme owl-carousel ">
        @foreach($bannerTypeMainBanner as $banner)
        
            <div class="item">
                <div class="banner-slide" style="--base: {{ $banner['background_color'] }};">
                    <a href="{{ $banner['url'] ?? 'javascript:'}}">
                    <img class="banner-slide-img" alt="{{ translate('banner') }}" loading="lazy" src="{{ getStorageImages(path: $banner['photo_full_url'], type:'product') }}">
                     
                    <div class="main-slider">
                        <div class="container">
                            @if($banner['title'] && $banner['sub_title'])
                                <div class="content">
                                    <h1 class="title mb-3">{{ $banner['title'] }}  </h1>
                                    <span class="subtxt">{{ $banner['sub_title'] }}</span>
                                    @if($banner['button_text'])
                                    <div class="info">
                                        <a href="{{ $banner['url'] ?? 'javascript:'}}" class="btn btn-base">{{ $banner['button_text'] }}</a>
                                    </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                    </a>
                </div>
            </div>
       
        @endforeach
    </div>
<style>
.banner-slide{
    position: relative;
    width: 100%;
}
.banner-slide-img{
    width: 100%;
    height: auto;
}
.banner-slide .main-slider{
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    display: flex;
    align-items: center;
    justify-content: start;
}
.banner-slide .main-slider .content{
    display: flex;
    align-items: start;
    justify-content: start;
    flex-direction: column;
}
.banner-slide .content .title {
    text-transform: capitalize;
    font-size: 55px;
    font-weight: 400;
    color: #555;
    line-height: 1.1;
    letter-spacing: 0px;
}
.banner-slide .content .title .subtxt {
    font-size: 18px;
    font-weight: 300;
    color: #555;
    line-height: 1.3;
}
.banner-slide .content .btn-base {
    color: #ffffff;
    font-size: 15px;
    line-height: 1;
    padding: 14px 30px;
    display: inline-block;
    border-radius: 50px;
    background-color: #edab1d;
    margin-top: 20px;
    transition: all 0.5s;
}
</style>

</section>


@else
    <section class="promo-page-header">
        <div class="product_blank_banner"></div>
    </section>
@endif

<script>
        // Set a timeout to delay the execution by 2 seconds
        setTimeout(() => {
            $('.banner-new-slider').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                navText: ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        }, 500); // 500 milliseconds = 2 seconds
    </script>
