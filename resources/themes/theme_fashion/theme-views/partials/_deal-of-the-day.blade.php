@if($dealOfTheDay)
    <section class="deal-of-the-day section-gap pb-0">
        <div class="container">
            <div class="deal-of-the-day-wrapper">
                <img loading="lazy" src="{{theme_asset('assets/img/deal/dd-1.png') }}"
                     alt="{{ translate('deal_of_the_day') }}" class="d-shape-1">
                <img loading="lazy" src="{{theme_asset('assets/img/deal/dd-2.png')}}"
                     alt="{{ translate('deal_of_the_day') }}" class="d-shape-2">
                <img loading="lazy" src="{{theme_asset('assets/img/deal/dd-3.png')}}"
                     alt="{{ translate('deal_of_the_day') }}" class="d-shape-3">
                <div class="deal-left">
                    <h6 class="subtitle text-capitalize">{{translate("do_not_miss_todays_deal")}}!</h6>
                    <h3 class="title">{{ translate('todays_best_deal') }}</h3>
                    @if (isset($dealOfTheDay->product) && $dealOfTheDay->product->discount > 0)
                        <span class="deal-badge bg-base secondary-color">
                            @if ($dealOfTheDay->product->discount_type == 'percent')
                                {{round($dealOfTheDay->product->discount, $web_config['decimal_point_settings'])}}%
                            @elseif($dealOfTheDay->product->discount_type =='flat')
                                {{webCurrencyConverter($dealOfTheDay->product->discount)}}
                            @endif
                            {{('off')}}
                        </span>
                    @elseif (isset($random_product->discount_type) && $random_product->discount > 0)
                        <span class="deal-badge bg-base secondary-color">
                            @if ($random_product->discount_type == 'percent')
                                {{round($random_product->discount, $web_config['decimal_point_settings'])}}%
                            @elseif($random_product->discount_type =='flat')
                                {{webCurrencyConverter($random_product->discount)}}
                            @endif
                            {{('off')}}
                        </span>
                    @endif
                </div>

                @if (isset($dealOfTheDay->product) && $dealOfTheDay->product->discount > 0)
                    <div class="deal-right">
                        <div class="deal-img">
                            <img loading="lazy" alt="{{ translate('product') }}"
                                 src="{{ getStorageImages(path: $dealOfTheDay?->product?->thumbnail_full_url, type: 'product') }}">
                        </div>
                        <div class="deal-content">
                            <div class="product-single-content">
                                <div class="d-flex flex-wrap align-items-center column-gap-4 mb-3">
                                    <div class=" review position-relative">
                                        <div class="stars">
                                            @php($overall_rating = getOverallRating($dealOfTheDay->product->reviews))
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $overall_rating[0])
                                                    <i class="bi bi-star-fill"></i>
                                                @elseif ($overall_rating[0] != 0 && $i <= $overall_rating[0] + 1.1)
                                                    <i class="bi bi-star-half"></i>
                                                @else
                                                    <i class="bi bi-star"></i>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                    <span
                                            class="badge badge-soft-{{$dealOfTheDay->product->current_stock>0 ? 'success':'danger'}}">
                                        {{translate($dealOfTheDay->product->current_stock>0 ? 'stock_available':'out_of_stock')}}

                                    </span>
                                </div>
                                <h3 class="title">{{ \Illuminate\Support\Str::limit($dealOfTheDay->product->name,60) }}</h3>
                                <div class="categories">
                                    <span class="text-base"><i class="bi bi-shop"></i></span> <span class="text-base">
                                        @if ($dealOfTheDay->product->added_by == 'admin')
                                            {{$web_config['company_name']}}
                                        @else
                                            {{isset($dealOfTheDay->product->seller->shop) ? $dealOfTheDay->product->seller->shop->name : ''}}
                                        @endif

                                    </span>
                                </div>
                                <br>
                                <div class="price">
                                    <h4>
                                        {!! getPriceRangeWithDiscount(product: $dealOfTheDay->product) !!}

                                        @if($dealOfTheDay->product->discount > 0)
                                            <span class="badge bg-base secondary-color">
                                                @if ($dealOfTheDay->product->discount_type === "percent")
                                                    -{{$dealOfTheDay->product->discount}}%
                                                @else
                                                    {{translate('save')}} {{ webCurrencyConverter(amount: $dealOfTheDay->product->discount) }}
                                                @endif
                                            </span>
                                        @endif

                                    </h4>

                                </div>
                                <div class="btn-grp">
                                    <a href="{{route('product',$dealOfTheDay->product->slug)}}"
                                       class="btn btn-base text-capitalize hover">
                                        {{translate('shop_now')}}<i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif (isset($random_product->discount_type))
                    <div class="deal-right">
                        <div class="deal-img">
                            <img loading="lazy" alt="{{ translate('product') }}"
                                 src="{{ getStorageImages(path: $random_product['thumbnail_full_url'], type: 'product') }}">
                        </div>
                        <div class="deal-content">
                            <div class="product-single-content">
                                <div class="d-flex flex-wrap align-items-center column-gap-4 mb-3">
                                    <div class=" review position-relative">
                                        <div class="stars">
                                            @php($overall_rating = getOverallRating($random_product->reviews))
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $overall_rating[0])
                                                    <i class="bi bi-star-fill"></i>
                                                @elseif ($overall_rating[0] != 0 && $i <= $overall_rating[0] + 1.1)
                                                    <i class="bi bi-star-half"></i>
                                                @else
                                                    <i class="bi bi-star"></i>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                    <span
                                            class="badge badge-soft-{{$random_product->current_stock>0 ? 'success':'danger'}}">
                                        {{translate($random_product->current_stock>0 ? 'stock_available':'out_of_stock')}}

                                    </span>
                                </div>
                                <h3 class="title">{{ \Illuminate\Support\Str::limit($random_product->name,60) }}</h3>
                                <div class="categories">
                                    <span class="text-base"><i class="bi bi-shop"></i></span> <span class="text-base">
                                        @if ($random_product->added_by == 'admin')
                                            {{$web_config['company_name']}}
                                        @else
                                            {{isset($random_product->seller->shop) ? $random_product->seller->shop->name : ''}}
                                        @endif

                                    </span>
                                </div>
                                <br>
                                <div class="price">
                                    <h4>
                                        {!! getPriceRangeWithDiscount(product: $random_product) !!}
                                        @if($random_product->discount > 0)
                                            <span class="badge bg-base secondary-color">
                                                @if ($random_product->discount_type === "percent")
                                                    -{{$random_product->discount}}%
                                                @else
                                                    {{translate('save')}} {{ webCurrencyConverter(amount: $random_product->discount) }}
                                                @endif
                                            </span>
                                        @endif
                                    </h4>
                                </div>
                                <div class="btn-grp">
                                    <a href="{{route('product',$random_product->slug)}}"
                                       class="btn btn-base text-capitalize hover">{{translate('shop_now')}}<i
                                                class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>
@endif
