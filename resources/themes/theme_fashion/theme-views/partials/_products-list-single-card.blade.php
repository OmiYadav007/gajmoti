<div class="product-card product-cart-option-container">
    <div class="product-card-inner">
        <div class="img">
            <a href="{{route('product',$product->slug)}}" class="d-block h-100">
                <img loading="lazy" class="w-100" alt="{{ translate('product') }}"
                     src="{{ getStorageImages(path: $product->thumbnail_full_url, type: 'product') }}">
            </a>
            @if (isset($product->created_at) && $product->created_at->diffInMonths(\Carbon\Carbon::now()) < 1)
                <span class="badge badge-title z-2">{{translate('new')}}</span>
            @endif
            <div class="hover-content d-flex justify-content-between">
                <a href="javascript:">{{ \Illuminate\Support\Str::limit(isset($product->category) ? $product->category->name:'', 7) }}</a>
                <div class="d-flex flex-wrap justify-content-between align-items-center column-gap-3">
                    <a href="javascript:" data-id="{{$product->id}}" class="d-inline-flex quickView_action">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="javascript:" class="d-inline-flex wish-icon addWishlist_function_view_page"
                       data-id="{{$product->id}}">
                        <i class="wishlist_{{$product->id}} bi {{ isProductInWishList($product->id) ?'bi-heart-fill text-danger':'bi-heart' }}"></i>
                    </a>
                    <div class="rating">
                        <i class="bi bi-star-fill text-star"></i>
                        <span>{{round($product->reviews->avg('rating') ?? 0,1)}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="cont">
            <h6 class="title">
                <a href="{{route('product',$product->slug)}}"
                   title="{{ $product['name'] }}">{{ $product['name'] }}</a>
            </h6>
            <div class="d-flex align-items-center justify-content-between column-gap-2">
                <h4 class="price flex-wrap">
                    <span>{{webCurrencyConverter($product->unit_price-\App\Utils\Helpers::getProductDiscount($product,$product->unit_price))}}</span>
                    @if($product->discount > 0)
                        <del>{{webCurrencyConverter($product->unit_price)}}</del>
                    @endif
                </h4>
                @if (json_decode($product->variation) != null)
                    <span class="btn add-to-cart-btn">
                        <a href="javascript:" data-id="{{$product['id']}}" class="quickView_action">
                            <i class="bi bi-plus"></i>
                        </a>
                    </span>
                @else
                    <?php $productCardGenID = rand(11111, 99999); ?>
                    <form class="cart addToCartDynamicForm add-to-cart-form-{{$product['id']}}" action="{{ route('cart.add') }}"
                          data-id="add-to-cart-form-{{$productCardGenID}}"
                          data-errormessage="{{translate('please_choose_all_the_options')}}"
                          data-outofstock="{{translate('sorry').', '.translate('out_of_stock')}}.">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="number" name="quantity" value="{{ $product->minimum_order_qty ?? 1 }}"
                               class="form-control product_quantity__qty" hidden>
                    </form>

                    <span class="btn add-to-cart-btn">
                        <a href="javascript:" class="store_vacation_check_function"
                           data-id="{{ $product['id'] }}"
                           data-added_by="{{ $product['added_by'] }}"
                           data-user_id="{{ $product['user_id'] }}"
                           data-action_url="{{ route('ajax-shop-vacation-check') }}"
                           data-product_cart_id="{{ $productCardGenID }}"
                        >
                            <i class="bi bi-plus"></i>
                        </a>
                    </span>
                @endif
            </div>
            @if ($product['product_type'] == 'physical')
                <div class="sold-info d-flex">
                    <span>{{ $product->order_details_sum_qty > 0 ? $product->order_details_sum_qty.' '.translate('sold').' /' : '' }}</span>
                    <span>{{$product->order_details_sum_qty + $product->current_stock}} {{translate('item')}}</span>
                </div>
            @else
                <div class="sold-info d-flex">
                    {{ $product->order_details_sum_qty > 0 ? $product->order_details_sum_qty.' '.translate('sold') : '' }}
                </div>
            @endif
        </div>
    </div>
</div>
