<div class="modal-body product-cart-option-container">
    <div class="modal-header py-0 border-0 z-999">
        <button type="button" class="btn-close position-right-top z-999" data-bs-dismiss="modal"
                aria-label="Close"></button>
    </div>
    <div class="product-single-wrapper">
        <div class="product-single-thumb">
            @if(json_decode($product->colors) && count($product->color_images_full_url)>0)
                <div class="overflow-hidden rounded">
                    <div class="product-share-icons">
                        <a href="javascript:" class="share-icon" title="{{translate('share')}}">
                            <i class="bi bi-share-fill"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:" class="social_share_function"
                                   data-url="{{route('product',$product->slug)}}"
                                   data-social="facebook.com/sharer/sharer.php?u="
                                >
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="social_share_function"
                                   data-url="{{route('product',$product->slug)}}"
                                   data-social="twitter.com/intent/tweet?text=">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="social_share_function"
                                   data-url="{{route('product',$product->slug)}}"
                                   data-social="linkedin.com/shareArticle?mini=true&url="
                                >
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="social_share_function"
                                   data-url="{{route('product',$product->slug)}}"
                                   data-social="api.whatsapp.com/send?text="
                                >
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="sync1" class="owl-carousel owl-theme product-single-main-slider">
                        @foreach ($product->color_images_full_url as $key => $photo)
                            @if($photo['color'] != null)
                                <div class="main-thumb">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ getStorageImages(path:$photo['image_name'], type: 'product') }}">
                                            <img loading="lazy" alt="{{ translate('product') }}"
                                                 src="{{ getStorageImages(path:$photo['image_name'], type: 'product') }}">
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="main-thumb">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ getStorageImages(path: $photo['image_name'], type: 'product') }}">
                                            <img loading="lazy" alt="{{ translate('product') }}"
                                                 src="{{ getStorageImages(path: $photo['image_name'], type: 'product') }}">
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @else
                <div class="overflow-hidden rounded">
                    <div class="product-share-icons">
                        <a href="javascript:" class="share-icon" title="{{translate('share')}}">
                            <i class="bi bi-share-fill"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="javascript:" class="social_share_function"
                                   data-url="{{route('product',$product->slug)}}"
                                   data-social="facebook.com/sharer/sharer.php?u=">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="social_share_function"
                                   data-url="{{route('product',$product->slug)}}"
                                   data-social="twitter.com/intent/tweet?text=">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                         fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="social_share_function"
                                   data-url="{{route('product',$product->slug)}}"
                                   data-social="linkedin.com/shareArticle?mini=true&url=">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="social_share_function"
                                   data-url="{{route('product',$product->slug)}}"
                                   data-social="api.whatsapp.com/send?text=">
                                    <i class="bi bi-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="sync1" class="owl-carousel owl-theme product-single-main-slider">
                        @foreach ($product->images_full_url as $key => $photo)
                            <div class="main-thumb">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ getStorageImages(path:$photo, type: 'product') }}">
                                        <img loading="lazy" alt="{{ translate('product') }}"
                                             src="{{ getStorageImages(path:$photo, type: 'product') }}">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            <div class="overflow-hidden">
                @if($product->images!=null && json_decode($product->images)>0)
                    <div id="sync2" class="owl-carousel owl-theme product-single-thumbnails">
                        @if(json_decode($product->colors) && count($product->color_images_full_url)>0)
                            @foreach ($product->color_images_full_url as $key => $photo)
                                @if($photo['color'] != null)
                                    <div class="thumb color_variants_preview-box-{{$photo['color']}}">
                                        <img loading="lazy" alt="{{ translate('product') }}"
                                             src="{{ getStorageImages(path: $photo['image_name'], type:'product') }}">
                                    </div>
                                @else
                                    <img loading="lazy" alt="{{ translate('product') }}"
                                         src="{{ getStorageImages(path: $photo['image_name'], type:'product') }}">
                                @endif
                            @endforeach
                        @else
                            @foreach ($product->images_full_url as $key => $photo)
                                <div class="thumb color_variants_{{$key}}">
                                    <img loading="lazy" alt="{{ translate('product') }}"
                                         src="{{ getStorageImages(path: $photo, type:'product') }}">
                                </div>
                            @endforeach
                        @endif
                    </div>
                @endif
            </div>
        </div>

        <div class="product-single-content">
            <form class="cart add_to_cart_form addToCartDynamicForm" action="{{ route('cart.add') }}" id="add-to-cart-form"
                  data-redirecturl="{{ route('checkout-details') }}"
                  data-varianturl="{{ route('cart.variant_price') }}"
                  data-errormessage="{{ translate('please_choose_all_the_options') }}"
                  data-outofstock="{{ translate('sorry').', '.translate('out_of_stock') }}.">
                @csrf
                <h3 class="title">{{ $product->name }}</h3>
                <input type="hidden" name="id" value="{{ $product->id }}">
                <div class="d-flex flex-wrap align-items-center column-gap-4 text-capitalize">
                    @if (count($product->reviews) != null)
                        <div class=" review position-relative">
                            <i class="bi bi-star-fill"></i>
                            <span>{{round($overallRating[0], 1)}} <small>({{ count($product->reviews) }} {{translate('review')}})</small></span>
                            <div class="review-details-popup z-3">
                                <div class="mb-4px">{{ translate('rating') }}</div>
                                <div class="review-items d-flex flex-column row-gap-1">
                                    <div class="d-flex column-gap-2 align-items-center">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <span class="progress">
                                            <div class="progress-fill"
                                                 style="--fill:{{($rating[0] != 0?number_format($rating[0]*100 / array_sum($rating)):0)}}%"></div>
                                        </span>
                                        <span>({{$rating[0]}})</span>
                                    </div>
                                    <div class="d-flex column-gap-2 align-items-center">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <span class="progress">
                                            <div class="progress-fill"
                                                 style="--fill:{{($rating[1] != 0?number_format($rating[1]*100 / array_sum($rating)):0)}}%"></div>
                                        </span>
                                        <span>({{$rating[1]}})</span>
                                    </div>
                                    <div class="d-flex column-gap-2 align-items-center">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <span class="progress">
                                            <div class="progress-fill"
                                                 style="--fill:{{($rating[2] != 0?number_format($rating[2]*100 / array_sum($rating)):0)}}%"></div>
                                        </span>
                                        <span>({{$rating[2]}})</span>
                                    </div>
                                    <div class="d-flex column-gap-2 align-items-center">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <span class="progress">
                                            <div class="progress-fill"
                                                 style="--fill:{{($rating[3] != 0?number_format($rating[3]*100 / array_sum($rating)):0)}}%"></div>
                                        </span>
                                        <span>({{$rating[3]}})</span>
                                    </div>
                                    <div class="d-flex column-gap-2 align-items-center">
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <span class="progress">
                                            <div class="progress-fill"
                                                 style="--fill:{{($rating[4] != 0?number_format($rating[4]*100 / array_sum($rating)):0)}}%"></div>
                                        </span>
                                        <span>({{$rating[4]}})</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class=" review position-relative">
                            <i class="bi bi-star-fill"></i>
                            <span>{{round($overallRating[0], 1)}} <small>({{translate('no_review')}})</small></span>
                        </div>
                    @endif

                    @if($product['product_type'] == 'physical' )
                        <span class="badge badge-soft-success stock_status">
                            <span class="in_stock_status">{{$product->current_stock}}</span> {{translate('stock_available')}}
                        </span>
                        <span class="badge badge-soft-danger d-none out_of_stock_status">{{translate('out_of_stock')}}</span>
                        <span class="badge badge-soft-secondary limited_status d-none">
                            <span class="in_stock_status">{{$product->current_stock}}</span> {{translate('limited_stock')}}
                        </span>
                    @endif

                </div>

                @if($product['product_type'] == 'physical' || (count($productPublishingHouseInfo['data']) == 0 && count($productAuthorsInfo['data']) == 0))
                    <div class="categories">
                        <span class="text-capitalize">{{ translate('category_tag') }} :</span>
                        @if ($product->category_id)
                            <a href="{{route('products',['category_id'=> $product->category_id,'data_from'=>'category','page'=>1])}}"
                               class="text-base">
                                {{ ucwords(isset($product->category) ? $product->category->name:'') }}
                            </a>
                        @endif

                        @if ($product->sub_category_id)
                            <a href="{{route('products',['category_id'=> $product->sub_category_id,'data_from'=>'category','page'=>1])}}"
                               class="text-base">
                                {{ ucwords(\App\Utils\CategoryManager::get_category_name($product->sub_category_id)) }}
                            </a>
                        @endif

                        @if ($product->sub_sub_category_id)
                            <a href="{{route('products',['category_id'=> $product->sub_sub_category_id,'data_from'=>'category','page'=>1])}}"
                               class="text-base">
                                {{ ucwords(\App\Utils\CategoryManager::get_category_name($product->sub_sub_category_id)) }}
                            </a>
                        @endif
                    </div>
                    <hr>
                @else
                    <div class="categories">
                        @if(count($productPublishingHouseInfo['data']) > 0)
                            <span class="text-capitalize">{{ translate('Publishing_House') }} :</span>
                            @foreach($productPublishingHouseInfo['data'] as $publishingHouseName)
                                @if($publishingHouseName)
                                    <a href="{{ route('products', ['publishing_house_id' => $publishingHouseName['id'], 'product_type' => 'digital', 'page'=>1]) }}"
                                       class="text-base">
                                        {{ $publishingHouseName['name'] }}
                                    </a>
                                @endif
                            @endforeach
                        @endif

                        @if(count($productAuthorsInfo['data']) > 0)
                            <span class="text-capitalize">{{ translate('Author') }} :</span>
                            @foreach($productAuthorsInfo['data'] as $productAuthor)
                                <a href="{{ route('products',['author_id' => $productAuthor['id'], 'product_type' => 'digital', 'page' => 1]) }}"
                                   class="text-base">
                                    {{ $productAuthor['name'] }}
                                </a>
                            @endforeach
                        @endif

                    </div>
                    <hr>
                @endif

                <div class="price">
                    <h4 class="d-flex align-items-end gap-2">
                        <span class="d-flex align-items-end gap-2">{!! getPriceRangeWithDiscount(product: $product) !!}</span>
                        @if ($product->discount > 0 && $product->discount_type === "percent")
                            <span class="badge bg-base">-{{$product->discount}}%</span>
                        @else
                            @if ($product->discount > 0)
                                <span class="badge bg-base">{{translate('save')}} {{webCurrencyConverter($product->discount)}}</span>
                            @endif
                        @endif
                    </h4>
                </div>

                @if (count(json_decode($product->colors)) > 0)
                    <div>
                        <label class="form-label">{{translate('color')}}</label>
                        <div class="check-color-group justify-content-start">
                            @foreach (json_decode($product->colors) as $key => $color)
                                <label>
                                    <input type="radio" name="color"
                                           value="{{ $color }}" {{ $key == 0 ? 'checked' : '' }}>
                                    <span style="--base:{{ $color }}" class="focus_preview_image_by_color"
                                          data-colorid="preview-box-{{ str_replace('#','',$color) }}"
                                          id="color_variants_preview-box-{{ str_replace('#','',$color) }}">
                                    <i class="bi bi-check"></i>
                                </span>
                                </label>
                            @endforeach
                            <span class="color_name"></span>
                        </div>
                    </div>
                @endif


                @foreach (json_decode($product->choice_options) as $key => $choice)
                    <div class="mt-20px">
                        <label class="form-label">{{translate($choice->title)}}</label>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach ($choice->options as $index => $option)
                                <label class="form-check-size">
                                    <input type="radio" name="{{ $choice->name }}" value="{{ $option }}"
                                            {{ $index == 0 ? 'checked' : '' }} >
                                    <span class="form-check-label">{{$option}}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endforeach

                @php($extensionIndex=0)
                @if($product['product_type'] == 'digital' && $product['digital_product_file_types'] && count($product['digital_product_file_types']) > 0 && $product['digital_product_extensions'])
                    @foreach($product['digital_product_extensions'] as $extensionKey => $extensionGroup)
                        <div class="mt-20px">
                            <label class="form-label">
                                {{ translate($extensionKey) }}
                            </label>
                            @if(count($extensionGroup) > 0)
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach($extensionGroup as $index => $extension)
                                        <label class="form-check-size user-select-none">
                                            <input type="radio" hidden
                                                   id="extension_{{ str_replace(' ', '-', $extension) }}"
                                                   name="variant_key"
                                                   value="{{ $extensionKey.'-'.preg_replace('/\s+/', '-', $extension) }}"
                                                {{ $extensionIndex == 0 ? 'checked' : ''}}>
                                            <span class="form-check-label rounded-10 border-2">
                                            {{ $extension }}
                                        </span>
                                        </label>
                                    @php($extensionIndex++)
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endforeach
                @endif

                <div class="d-flex align-items-center row-gap-2 column-gap-4 mt-20px">
                    <span>{{ translate('quantity') }} :</span>
                    <div class="inc-inputs">
                        <input type="number" name="quantity" value="{{ $product->minimum_order_qty ?? 1 }}"
                               class="form-control product_quantity__qty product_qty"
                               min="{{ $product->minimum_order_qty ?? 1 }}"
                               max="{{$product['product_type'] == 'physical' ? $product->current_stock : 100}}">
                    </div>
                </div>
                <input type="hidden" class="product-generated-variation-code" name="product_variation_code" data-product-id="{{ $product['id'] }}">
                <input type="hidden" value="" class="in_cart_key form-control w-50" name="key">
                <div class="btn-grp">
                    @php($guestCheckout = getWebConfig(name: 'guest_checkout'))

                    <div class="product-add-and-buy-section d--flex flex-wrap gap-2" {!! $firstVariationQuantity <= 0 ? 'style="display: none;"' : '' !!}>
                        @if(($product->added_by == 'seller' && ($seller_temporary_close || (isset($product->seller->shop) && $product->seller->shop->vacation_status && $currentDate >= $seller_vacation_start_date && $currentDate <= $seller_vacation_end_date))) ||
                        ($product->added_by == 'admin' && ($inhouse_temporary_close || ($inHouseVacationStatus && $currentDate >= $inhouse_vacation_start_date && $currentDate <= $inhouse_vacation_end_date))))
                            <button type="button" class="update_cart_button btn btn-base fs-16 text-capitalize" disabled>
                                @include('theme-views.partials.icons._cart-icon')
                                {{translate('add_to_cart')}}
                            </button>
                            <button type="button"
                                    class="buy_now_button btn btn-base __btn-outline-warning secondary-color fs-16 text-capitalize"
                                    disabled>
                                @include('theme-views.partials.icons._buy-now') {{translate('buy_now')}}
                            </button>
                        @else
                            <a href="javascript:"
                               class="btn btn-base text-capitalize add_to_cart_button"
                               data-update-text="{{ translate('update_cart') }}"
                               data-add-text="{{ translate('add_to_cart') }}">
                                @include('theme-views.partials.icons._cart-icon')
                                <span>{{ translate('add_to_cart') }}</span>
                            </a>
                            <a href="javascript:"
                               data-formid="add-to-cart-form"
                               class="btn btn-base btn-sm __btn-outline-warning secondary-color text-capitalize buyNow_function_btn"
                               data-authstatus="{{( $guestCheckout == 1 || Auth::guard('customer')->check() ? 'true' : 'false')}}"
                               data-route="{{route('shop-cart')}}"
                            >
                                @include('theme-views.partials.icons._buy-now') {{ translate('buy_now') }}
                            </a>
                        @endif
                    </div>

                    @if(($product['product_type'] == 'physical'))
                        <div class="product-restock-request-section collapse" {!! $firstVariationQuantity <= 0 ? 'style="display: block;"' : '' !!}>
                            <button type="button"
                                    class="btn btn-md __btn-outline-base text-capitalize product-restock-request-button"
                                    data-auth="{{ auth('customer')->check() }}"
                                    data-form=".addToCartDynamicForm"
                                    data-default="{{ translate('Request_Restock') }}"
                                    data-requested="{{ translate('Request_Sent') }}"
                            >
                                {{ translate('Request_Restock')}}
                            </button>
                        </div>
                    @endif

                    <a href="javascript:" class="btn btn-base btn-sm __btn-outline addWishlist_function_btn border bg-transparent"
                    ><i class="wishlist_{{$product['id']}} bi {{($wishlist_status == 1?'bi-heart-fill text-danger':'bi-heart')}} text-base"></i>
                        <span class="product_wishlist_count_status">{{ \App\Utils\format_biginteger($countWishlist) }}</span>
                    </a>

                    <a href="javascript:"
                       class="addCompareList_quick_view btn btn-base text-base btn-sm __btn-outline compare_list-{{$product['id']}} {{ isProductInCompareList($product->id) ?'compare_list_icon_active':'' }} border bg-transparent"
                       data-id="{{$product['id']}}" style="--base: {{ $web_config['primary_color'] }}">
                        @include('theme-views.partials.icons._compare')
                    </a>
                </div>

                @if(($product->added_by == 'seller' && ($seller_temporary_close || (isset($product->seller->shop) && $product->seller->shop->vacation_status && $currentDate >= $seller_vacation_start_date && $currentDate <= $seller_vacation_end_date))) ||
                ($product->added_by == 'admin' && ($inhouse_temporary_close || ($inHouseVacationStatus && $currentDate >= $inhouse_vacation_start_date && $currentDate <= $inhouse_vacation_end_date))))
                    <div class="alert alert-danger mt-3" role="alert">
                        {{translate('this_shop_is_temporary_closed_or_on_vacation.')}}
                        {{translate('you_cannot_add_product_to_cart_from_this_shop_for_now')}}
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
<script src="{{ theme_asset('assets/js/quick-view-data.js') }}"></script>
<script type="text/javascript">
    "use strict";
    $('.addWishlist_function_btn').on('click', function () {
        addWishlist_function('{{$product['id']}}');
    });

    $('.add_to_cart_button').on('click', function () {
        let parentElement = $(this).closest('.product-cart-option-container');
        let productCartForm = parentElement.find('.addToCartDynamicForm')
        addToCart(productCartForm);
    });

    $('.buyNow_function_btn').on('click', function () {
        let url = $(this).data("route");
        let redirectStatus = $(this).data("authstatus").toString();
        let parentElement = $(this).closest('.product-cart-option-container');
        let productCartForm = parentElement.find('.addToCartDynamicForm')
        addToCart(productCartForm, redirectStatus, url);
        if(redirectStatus === "false") {
            $("#quickViewModal").modal("hide");
            customerLoginRegisterModalCall()
            toastr.warning($('.login-warning').data('login-warning-message'));
        }
    });
</script>

