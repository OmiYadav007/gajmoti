@extends('theme-views.layouts.app')

@section('title', $web_config['company_name'].' '.translate('online_shopping').' | '.$web_config['company_name'].' '.translate('ecommerce'))

@push('css_or_js')
    <meta property="og:image" content="{{$web_config['web_logo']['path']}}"/>
    <meta property="og:title" content="Welcome To {{$web_config['company_name']}} Home"/>
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:description"
          content="{{ substr(strip_tags(str_replace('&nbsp;', ' ', $web_config['about']->value)),0,160) }}">

    <meta property="twitter:card" content="{{$web_config['web_logo']['path']}}"/>
    <meta property="twitter:title" content="Welcome To {{$web_config['company_name']}} Home"/>
    <meta property="twitter:url" content="{{ config('app.url') }}">
    <meta property="twitter:description" content="{{ substr(strip_tags(str_replace('&nbsp;', ' ', $web_config['about']->value)),0,160) }}">
@endpush

@section('content')


<style type="text/css">
    
.bg-base {
	background-color: #ffffff !important;
}
.header.bg-base {
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}
.header-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    z-index: 99;
    padding: 30px 0;
}
.header-section .header-right-icons li a i {
    line-height: 1;
    font-style: normal;
    font-size: 1.4285714286rem;
    color: #000 !important;
}
.header-middle .header-right-icons li a i {
	line-height: 1;
	font-style: normal;
	font-size: 1.4285714286rem;
	color: #ffffff !important;
}
.header-wrapper .header-right-icons li a {
	color: #ffffff !important;
}
.header-wrapper .header-right-icons li a span {
    line-height: 17.5px;
    display: block;
    color: #000 !important;
}
.header-right-icons li a .btn-status {
    background:#a02b50;
}
.menu-area .menu li a {
	display: flex;
	align-items: center;
	gap: 0.2142857143rem;
	padding: 0.3571428571rem 0.7142857143rem;
	color: #000000;
	font-size: 15px;
	line-height: 1.4285714286rem;
	text-transform: capitalize;
}
.menu-area .menu li:hover>a {
    color: #a02b50;
}
.nav-toggle span {
	background-color: #a02b50;
}
.promo-page-header img {
	height: 100% !important;
}
.banner-section.custom-height {
     min-height: 100%; 
     height: 100%; 
}
.banner-slider .banner-slide-img{
  width: 100% !important;
  max-width: 100%;
  top: 0 !important;
  left: 0 !important;
  transform: none !important;
}
.banner-slide img:not(.banner-arrow) {
    align-self: flex-end;
    height: 100%;
    -o-object-fit: contain;
    object-fit: contain;
    width: calc(100%) !important;
    max-width: 100%;
    width: 100%;
}
.banner-slide .content {
    align-self: center;
    transition: all ease 0.6s;
    width: 35.071429rem !important;
    min-width: 35.071429rem !important;
    position: relative;
    z-index: 3;
}
.banner-slide .content .title {
	text-transform: capitalize;
	font-size: 55px;
	font-weight: 400;
	color: #555;
	line-height: 1.1;
	letter-spacing: 0px;
}
.banner-slide .content .subtxt{
    font-size: 20px;
    font-weight: 300;
    line-height: 1.3;
    color: #555;
}
.banner-slide .content .btn-base {
	color: #ffffff;
	font-size: 15px;
	line-height: 1;
	padding: 14px 30px;
	display: inline-block;
	border-radius: 50px;
	background-color: #a02b50!important;
	margin-top: 20px;
	transition: all 0.5s;
}
.banner-slide .content .btn-base:hover {
	color: #fff!important;
	background-color: #222!important;
	border: none;
}
.banner-slider .owl-stage .owl-item.selected-item {
	width: 100vw !important;
}
.owl-theme .owl-prev {
	inset-inline-start: 0;
	background: linear-gradient(270deg, rgba(var(--base-rgb), 0) 0%, rgb(237 171 29 / 0%) 100%);
}
.owl-theme .owl-next {
	inset-inline-end: 0;
	background: linear-gradient(270deg, rgb(237 171 29 / 0%) 0%, rgba(var(--base-rgb), 0) 100%);
}
.banner-new-slider.owl-theme .owl-prev, .banner-new-slider.owl-theme .owl-next{
    font-size: 30px;
    margin-left: 25px;
    margin-right: 25px;
}
.banner-slider .owl-stage .owl-item {
    width: 100vw !important;
    background: #f2f2f2;
}
.support-wrapper .support-card {
	flex-grow: 1;
	width: 8.5714285714rem;
	flex-grow: 1;
	max-width: 200px;
	display: flex;
	padding: 10px;
}
.support-wrapper .support-card-inner .title {
	font-weight: 700;
	font-size: 16px;
	line-height: 0.7857142857rem;
	margin-bottom: 10px;
}
.support-wrapper .support-card-inner {
    flex-grow: 1;
    text-align: center;
    font-weight: 400;
    font-size: 14px;
    line-height: 1.2;
    color: #9b9b9b;
    border: 0.0714285714rem solid var(--border-2);
    padding: 0 0.6771428571rem 0.7142857143rem;
    border-radius: 0.4285714286rem;
}
.most-visited-category-wrapper .most-visited-item .cont i{
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  background: #a02b50;
  border-radius: 5px;
}
.most-visited-category-wrapper .most-visited-area .most-visited-item:nth-of-type(1), .most-visited-category-wrapper .most-visited-area .most-visited-item:nth-of-type(5) {
	width: 12.25rem;
	height: 17.714286rem;
}
.most-visited-category-wrapper .most-visited-area .most-visited-item:nth-of-type(2) {
	width: 13.285714rem;
	height: 17.714286rem;
}
.most-visited-category-wrapper .most-visited-area .most-visited-item:nth-of-type(3) {
	width: 13.285714rem;
	height: 17.714286rem;
}
.categories-slider .most-visited-item {
	width: 100px;
	height: 100px;
}
.custom-single-slider .owl-item.selected-item .banner-slide {
    display: flex;
    gap: 1rem 2rem;
    justify-content: start;
}
.custom-single-slider .owl-item .banner-slide {
    display: flex;
    gap: 1rem 2rem;
    justify-content: center;
    max-width: 1320px;
    margin: auto;
}	
.page_title_overlay {
    position: relative;
    z-index: 1;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 120px 0 !importanti;
}
.support-wrapper {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	row-gap: 40px;
	margin-top: 50px;
}
.footer-bottom .bg-base .text-white {
	color: #000000 !important;
}
.social-icons li a {
	color: #000000 !important;
	font-size: 1.1428571429rem;
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
}
.social-icons li a i{
    transition: all 0.5s;
	-webkit-transition: all 0.5s;
}
.social-icons li a:hover i {
	color: #a02b50;
}
.most-visited-category-wrapper .most-visited-area .most-visited-item {
    height: 100% !important;
}
.most-visited-category-wrapper > .most-visited-item {
    width: 25.428571rem !important;
    height: auto;
}
.most-visited-category-wrapper {
    align-items: normal !important;
}

.product-single-wrapper .product-single-pricing{
    max-width: 20.857143rem;
    display: none;
}
.support-wrapper .support-card-inner .icon{
    margin-bottom: -0.875rem !important;
    -o-object-fit: contain;
    object-fit: contain;
    transform: translateY(-30%);
    background: var(--body-bg);
    max-width: 100px;
    margin-inline: auto;
}
.support-wrapper .support-card-inner .icon img{
    width: 6.571429rem;
    height: 6.571429rem;
}
.product-card .product-cart-option-container .product-card .img .hover-content .wish-icon .product-card .img .hover-content a{
    display: none;
}
.newsletter-wrapper .newsletter-wrapper-inner .cont .title{
    color: var(--white);
    margin-bottom: 0.285714rem;
    display: none;
}
.product-card .cont .rating{
    margin-top: 0.2857142857rem;
    display: none;
}
.product-card .cont .status{
    display: none;
}
.newsletter-wrapper .newsletter-wrapper-inner .cont .title{
    color: var(--white);
    margin-bottom: 0.285714rem;
    display: none;
}
.newsletter-wrapper .newsletter-wrapper-inner .cont p{
    margin: 13px 0;
}
.recommended-product-section .product-card .img .hover-content{
    justify-content: center !important;
}
.recommended-product-section.pb-0 .product-card .hover-content{
     display: none !important;
}
.product-single-section .container div.mt-3{
    display: none !important;
}
.product-single-section .product-single-content .btn-grp a .addCompareList_view_page {
 display: none !important;
}

.product-single-wrapper .product-single-thumb .owl-item{
  max-width: 500px !important;
}


@media (min-width: 767px) {
    .product-single-wrapper .product-single-thumb {
        max-width: 500px !important;
    }
}

@media (min-width: 991px) and (max-width: 1024px) {
 .banner-new-slider.owl-theme .owl-prev, .owl-next {
    margin-left: 0px;
    margin-right: 0px;
}
}

@media (min-width: 1199px) {
	.most-visited-category-wrapper > .most-visited-item {
		max-width: 26.25rem !important;
	}
	.menu-area .menu li a:before {
	   background: #a02b50 !important;
	}
	.menu-area .menu li .submenu {
	    position: absolute;
        left: 0;
        top: calc(100% + 33px);
        transition: all ease 0.3s;
        background: var(--bs-body-bg);
        border-radius: 0.3571428571rem;
        min-width: 15.7142857143rem;
        padding: 0.5rem;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
	}
}
@media (max-width: 992px) {
   .banner-slide .content .title{
		font-size: 36px !important;
		margin-bottom: 10px !important;
	} 
}

@media (max-width: 767px) {
    .header-wrapper{
        padding:20px 0 !important;
    }
	.banner-slider .owl-stage {
		height: 280px !important;
		min-height: 280px !important;
	}
	.banner-slide .content .title{
		font-size: 24px !important;
		margin-bottom: 5px !important;
	}
	.banner-slide .content .title .subtxt {
        font-size: 15px !important;
    }
    .banner-slide img{
        z-index:0;
        padding-bottom:0px !important;
    }
    .banner-slide{
        padding-inline-start: 0px !important;
    }
    .banner-slide .content .btn-base{
        padding:8px 18px !important;
        margin-top:5px !important;
        font-size:14px !important;
    }
    .banner-new-slider.owl-theme .owl-prev, .banner-new-slider.owl-theme .owl-next{
        height:calc(100% - 25px) !important;
    }
    .banner-new-slider.owl-theme .owl-prev, .banner-new-slider.owl-theme .owl-next{
        font-size:22px !important;
    }
   .banner-new-slider.owl-theme .owl-prev, .owl-nav {
	display: none;
    }
}
@media (min-width: 768px) and (max-width: 991px) {
    .banner-new-slider.owl-theme .owl-prev, .owl-next {
        margin-left: 0px;
        margin-right: 0px;
    }

@media (max-width: 380px) {
  .banner-slide .content .title{
		font-size: 24px !important;
		margin-top: 0px !important;
        display: block;
	}
}
@media (max-width: 479px) {
     .banner-slide .content .subtxt{
        font-size: 16px;
        line-height: 1.3;
        max-width: 275px;
        white-space: nowrap;
    }
}


</style>

    @include('theme-views.partials._banner-section')

    <div class="container d-none">
        @include('theme-views.layouts.partials._search-form-partials')
    </div>

    @if ($categories->count() > 0)
        @include('theme-views.partials._categories')
    @endif

    @if ($bannerTypePromoBannerMiddleTop)
        <div class="container d-sm-none mt-3">
            <a href="{{ $bannerTypePromoBannerMiddleTop['url'] }}" target="_blank" class="img1 promo-1">
                <img loading="lazy" class="img-fluid" alt="{{ translate('banner') }}" src="{{ getStorageImages(path: $bannerTypePromoBannerMiddleTop['photo_full_url'], type: 'banner') }}">
            </a>
        </div>
    @endif

    @if ($flashDeal['flashDeal'] && $flashDeal['flashDealProducts']  && count($flashDeal['flashDealProducts']) > 0)
        @include('theme-views.partials._flash-deals')
    @endif

    @if ($bannerTypePromoBannerLeft)
        <div class="container d-sm-none overflow-hidden pt-4">
            <a href="{{ $bannerTypePromoBannerLeft['url'] }}" target="_blank" class="img3 img-fluid">
                <img loading="lazy" src="{{ getStorageImages(path: $bannerTypePromoBannerLeft['photo_full_url'], type:'banner') }}"
                class="img-fluid" alt="{{ translate('banner') }}">
            </a>
        </div>
    @endif

    @include('theme-views.partials._recommended-product')

    @if ($bannerTypePromoBannerLeft && $bannerTypePromoBannerMiddleTop && $bannerTypePromoBannerMiddleBottom && $bannerTypePromoBannerRight)
        @include('theme-views.partials._promo-banner')
    @endif

    @include('theme-views.partials._deal-of-the-day')

    @if ($bannerTypePromoBannerMiddleBottom)
        <div class="container d-sm-none overflow-hidden pt-4">
            <a href="{{ $bannerTypePromoBannerMiddleBottom['url'] }}" target="_blank" class="img2">
                <img loading="lazy" src="{{ getStorageImages(path: $bannerTypePromoBannerMiddleBottom['photo_full_url'], type:'banner') }}"
                class="img-fluid" alt="{{ translate('banner') }}">
            </a>
        </div>
    @endif

    @include('theme-views.partials.__featured-product')

    @include('theme-views.partials._all-products-home')

    @include('theme-views.partials._signature-product')

    @if ($web_config['business_mode'] == 'multi' && count($topVendorsList) > 0)
        @include('theme-views.partials._top-stores')
    @endif

    @if ($bannerTypePromoBannerRight)
        <div class="container d-sm-none overflow-hidden pt-4">
            <a href="{{ $bannerTypePromoBannerRight['url'] }}" target="_blank" class="d-block promotional-banner">
                <img loading="lazy" src="{{ getStorageImages(path: $bannerTypePromoBannerRight['photo_full_url'], type:'banner') }}"
                class="w-100 img-fluid" alt="{{ translate('banner') }}">
            </a>
        </div>
    @endif

    @include('theme-views.partials._most-demanded-product')

    @if ($web_config['business_mode'] == 'multi' && getCustomerFromQuery() && count($recentOrderShopList)>0)
        @include('theme-views.partials._recent-ordered-shops')
    @endif

    @if ($bannerTypePromoBannerBottom)
        <div class="container">
            <div class="mt-32px">
                <a href="{{ $bannerTypePromoBannerBottom->url }}" target="_blank" class="d-block promotional-banner">
                    <img loading="lazy" class="w-100 rounded aspect-ratio-8-1" alt="{{ translate('banner') }}"
                         src="{{ getStorageImages(path: $bannerTypePromoBannerBottom['photo_full_url'], type:'banner') }}">
                </a>
            </div>
        </div>
    @endif

    @if ($web_config['business_mode'] == 'multi')
        @include('theme-views.partials._other-stores')
    @endif

    @include('theme-views.partials._how-to-section')

@endsection



@if ($bannerTypeMainBanner->count() <= 1)
@push('script')
    <script src="{{ theme_asset('assets/js/home-blade.js') }}"></script>
@endpush
@endif
