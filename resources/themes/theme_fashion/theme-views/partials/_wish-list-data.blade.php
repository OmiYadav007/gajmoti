<div class="table-responsive d-none d-md-block">
    <table class="table __table vertical-middle">
        @if($wishlists->count()>0)
            <thead class="word-nobreak">
            <tr>
                <th>
                    <label class="form-check m-0">
                        <span class="form-check-label">{{ translate('product') }}</span>
                    </label>
                </th>
                <th class="text-center">
                    {{ translate('discount') }}
                </th>
                <th class="text-center text-capitalize">
                    {{ translate('stock_status') }}
                </th>
                <th class="text-center text-capitalize">
                    {{ translate('total_price') }}
                </th>
                <th class="text-center">
                    {{ translate('action') }}
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($wishlists as $key=>$wishlist)
                @php($product = $wishlist->productFullInfo)
                @if( $wishlist->productFullInfo)
                    <tr class="row_id{{$product->id}} product-cart-option-container">
                        <form class="cart addToCartDynamicForm add_to_cart_form" action="{{ route('cart.add') }}"
                              id="stock_check_for_product_mobile{{$product->id}}" data-redirecturl="{{route('checkout-details')}}"
                              data-varianturl="{{ route('cart.variant_price') }}"
                              data-errormessage="{{translate('please_choose_all_the_options')}}"
                              data-outofstock="{{translate('sorry').', '.translate('out_of_stock')}}.">
                            @csrf
                            @php($variation = json_decode($product->variation))
                            @php($price = 0)
                            @php($tax = 0)
                            @php($discount = 0)
                            <td>
                                <input type="text" name="id" value="{{ $product->id }}" hidden>
                                @if ($product->product_type == "physical")
                                    <input type="text" class="quantity__qty product_quantity__qty product_quantity__qty{{$product->id}}"
                                           id="qty{{$product->id}}" min="{{ $product->minimum_order_qty ?? 1 }}"
                                           max="{{$product->current_stock}}" name="quantity"
                                           value="{{$product->current_stock >0 ? $product->minimum_order_qty : 0}}"
                                           hidden>
                                @else
                                    <input type="text" class="quantity__qty product_quantity__qty product_quantity__qty{{$product->id}}"
                                           id="qty{{$product->id}}" name="quantity"
                                           value="{{$product->minimum_order_qty}}"
                                           min="{{ $product->minimum_order_qty }}" max="{{ $product->current_stock }}"
                                           hidden>
                                @endif

                                <div class="cart-product">
                                    <label class="form-check">
                                        <img loading="lazy" alt="{{ translate('product') }}"
                                             src="{{ getStorageImages(path: $product->thumbnail_full_url, type: 'product') }}">
                                    </label>
                                    <div class="cont">
                                        <a href="{{route('product',$product['slug'])}}"
                                           class="name text-title">{{ $product->name }}</a>
                                        @if ($product->product_type == "physical")
                                            @php($price = isset($variation[0]) ? $variation[0]->price : $product->unit_price)
                                            <div class="d-flex column-gap-1">
                                                <span>{{ translate('price') }}</span> <span>:</span> <strong
                                                        class="unit_price{{$product->id}}">{{webCurrencyConverter($price) }}</strong>
                                            </div>
                                            @php($tax = $product->tax_model=='exclude' ? \App\Utils\Helpers::tax_calculation(product: $product, price: $price, tax: $product['tax'], tax_type: $product['tax_type']) : '0')
                                            <div class="d-flex column-gap-1">
                                                <span>{{ translate('vat') }}</span> <span>:</span> <strong
                                                        class="tax{{$product->id}}">{{$tax !=0 ? webCurrencyConverter($tax) : 'incl.'}}</strong>
                                            </div>
                                        @else
                                            @php($price = $product->unit_price)
                                            <div class="d-flex column-gap-1">
                                                <span>{{ translate('price') }}</span> <span>:</span> <strong
                                                        class="unit_price{{$product->id}}">{{ webCurrencyConverter($price) }}</strong>
                                            </div>
                                            @php($tax = $product->tax_model=='exclude' ? \App\Utils\Helpers::tax_calculation(product: $product, price: $price, tax: $product['tax'], tax_type: $product['tax_type']) : '0')
                                            <div class="d-flex column-gap-1">
                                                <span>{{ translate('vat') }}</span> <span>:</span> <strong
                                                        class="tax{{$product->id}}">{{$tax !=0 ? webCurrencyConverter($tax) : 'incl.'}}</strong>
                                            </div>
                                        @endif
                                        <div class="d-flex column-gap-1">
                                            @if (isset($product->category))
                                                <span>{{ translate('category') }} </span> <span>:</span>
                                                <strong>{{ isset($product->category) ? $product->category->name:'' }}</strong>
                                            @endif
                                        </div>
                                        @if ($product->product_type == "physical")
                                            <div class="d-flex flex-wrap column-gap-3">
                                                @foreach (json_decode($product->choice_options) as $k => $choice)
                                                    <div class="d-flex column-gap-1">
                                                        <span> {{ translate($choice->title)}} </span> <span>:</span>
                                                        <select class="no-border-select text-title variants-class{{$key}} stock_check_for_product_web"
                                                                data-id="{{$product->id}}" name="{{$choice->name}}">
                                                            @foreach ($choice->options as $key=>$value)
                                                                <option value="{{ $value }}">{{ ucwords($value) }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                @endforeach
                                                @if (!empty(json_decode($product->colors)))
                                                    <div class="d-flex column-gap-1">
                                                        <span>{{ translate('color') }} </span> <span>:</span>
                                                        <select class="no-border-select text-title variants-class{{$key}} stock_check_for_product_web"
                                                                data-id="{{$product->id}}" name="color">
                                                            @foreach (json_decode($product->colors) as $k=>$value)
                                                                <option value="{{ $value }}">{{ \App\Utils\get_color_name($value) }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                @endif
                                            </div>
                                        @elseif ($product['product_type'] == 'digital' && $product['digital_product_file_types'] && count($product['digital_product_file_types']) > 0 && $product['digital_product_extensions'])
                                            @php($extensionIndex=0)
                                            <div class="d-flex flex-wrap column-gap-1">
                                                <div class="d-flex column-gap-1">
                                                    <span> {{ translate('Variations') }} </span> <span>:</span>
                                                    <select class="no-border-select text-title stock_check_for_product_mobile" data-id="{{ $product->id }}" name="variant_key">
                                                        @foreach($product['digital_product_extensions'] as $extensionKey => $extensionGroup)
                                                            @if(count($extensionGroup) > 0)
                                                                @foreach($extensionGroup as $index => $extension)
                                                                    <option value="{{ $extensionKey.'-'.preg_replace('/\s+/', '-', $extension) }}" {{ $extensionIndex == 0 ? 'checked' : ''}}>
                                                                        {{ ucwords($extensionKey.'-'.ucwords(preg_replace('/\s+/', '-', $extension))) }}
                                                                    </option>
                                                                    @php($extensionIndex++)
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="text-center discount_status{{$product->id}}">
                                @if ($product->discount)
                                    @if ($product->product_type == "physical")
                                        @php($discount = \App\Utils\Helpers::getProductDiscount($product,$price))
                                        <span class="badge badge-soft-base discount{{$product->id}}">-{{webCurrencyConverter($discount)}}</span>
                                    @else
                                        @php($discount = \App\Utils\Helpers::getProductDiscount($product,$product->unit_price))
                                        <span class="badge badge-soft-base discount{{$product->id}}">-{{webCurrencyConverter($discount)}}</span>
                                    @endif
                                @else
                                    <span class="badge text-capitalize badge-soft-secondary discount{{$product->id}}">{{ translate('no_discount') }}</span>
                                @endif
                            </td>

                            <td class="text-center text-capitalize stock_status{{$product->id}}">
                                @if ($product->product_type == "physical")
                                    @php($qty = isset($variation[0]) ? $variation[0]->qty : $product->current_stock)
                                    <span class="badge badge-soft-{{$qty>0 ? 'success' : 'danger'}}">
                                        {{translate($qty>0 ? 'stock_Available' : 'stock_not_available')}}
                                    </span>
                                @else
                                    <span class="badge badge-soft-success">
                                        {{translate('stock_available')}}
                                    </span>
                                @endif
                            </td>
                            <td class="text-center text-base total_price{{$product->id}}"> {{webCurrencyConverter($price+$tax-$discount) }} </td>
                            <td>
                                <div class="d-flex align-items-center column-gap-2 justify-content-center text-capitalize">
                                    <a href="javascript:"
                                       class="btn btn-outline-danger px-3 remove_wishlist_theme_fashion"
                                       data-productid="{{$product->id}}"><i class="bi bi-heart-fill"></i></a>
                                    <button type="submit" data-id="{{$product->id}}"
                                            class="btn btn-base add_to_cart_web"><i
                                                class="bi bi-cart"></i> {{ translate('add_to_cart') }}</button>
                                </div>
                            </td>
                        </form>
                    </tr>
                @endif
            @endforeach
            </tbody>
        @endif
    </table>
</div>


<div class="d-flex flex-column gap-3 d-md-none mt-4">
    @foreach($wishlists as $key=>$wishlist)
        @php($product = $wishlist->productFullInfo)
        @if( $wishlist->productFullInfo)
            <div class="row_id{{$product->id}} product-cart-option-container">
                <form class="cart add_to_cart_form addToCartDynamicForm" id="add_to_cart_form_mobile{{$product->id}}"
                      action="{{ route('cart.add') }}" data-redirecturl="{{route('checkout-details')}}"
                      data-varianturl="{{ route('cart.variant_price') }}"
                      data-errormessage="{{translate('please_choose_all_the_options')}}"
                      data-outofstock="{{translate('sorry').', '.translate('out_of_stock')}}.">
                    @csrf
                    @php($variation = json_decode($product->variation))
                    @php($price = 0)
                    @php($tax = 0)
                    @php($discount = 0)
                    <div class="d-flex justify-content-between gap-3 align-items-center border-bottom pb-3">

                        <input type="text" name="id" value="{{ $product->id }}" hidden>
                        @if ($product->product_type == "physical")
                            <input type="text" class="quantity__qty product_quantity__qty product_quantity__qty{{$product->id}}"
                                   id="qty{{$product->id}}" min="{{ $product->minimum_order_qty ?? 1 }}"
                                   max="{{$product->current_stock}}" name="quantity"
                                   value="{{$product->current_stock > 0 ? $product->minimum_order_qty : 0}}"
                                   hidden>
                        @else
                            <input type="text" class="quantity__qty product_quantity__qty product_quantity__qty{{$product->id}}"
                                   id="qty{{$product->id}}" name="quantity"
                                   value="{{$product->minimum_order_qty}}" min="{{ $product->minimum_order_qty ?? 1 }}"
                                   max="{{ $product->current_stock }}" hidden>
                        @endif
                        <div class="cart-product">
                            <label class="form-check">
                                <img loading="lazy" alt="{{ translate('products') }}" src="{{ getStorageImages(path: $product['thumbnail_full_url'], type: 'product') }}">

                            </label>
                            <div class="cont d-flex flex-column gap-1">
                                <a href="{{route('product',$product['slug'])}}"
                                   class="name text-title">{{ $product->name }}</a>
                                @if ($product->product_type == "physical")
                                    @php($price = isset($variation[0]) ? $variation[0]->price : $product->unit_price)
                                    <div class="d-flex column-gap-1">
                                        <span>{{ translate('price') }}</span> <span>:</span> <strong
                                                class="unit_price{{$product->id}}">{{webCurrencyConverter($price) }}</strong>
                                    </div>
                                    @php($tax = $product->tax_model=='exclude' ? \App\Utils\Helpers::tax_calculation(product: $product, price: $price, tax: $product['tax'], tax_type: $product['tax_type']) : '0')
                                    <div class="d-flex column-gap-1">
                                        <span>{{ translate('vat') }}</span> <span>:</span> <strong
                                                class="tax{{$product->id}}">{{$tax !=0 ? webCurrencyConverter($tax) : 'incl.'}}</strong>
                                    </div>
                                @else
                                    @php($price = $product->unit_price)
                                    <div class="d-flex column-gap-1">
                                        <span>{{ translate('price') }}</span> <span>:</span> <strong
                                                class="unit_price{{$product->id}}">{{ webCurrencyConverter($price) }}</strong>
                                    </div>
                                    @php($tax = $product->tax_model=='exclude' ? \App\Utils\Helpers::tax_calculation(product: $product, price: $price, tax: $product['tax'], tax_type: $product['tax_type']) : '0')
                                    <div class="d-flex column-gap-1">
                                        <span>{{ translate('vat') }}</span> <span>:</span> <strong
                                                class="tax{{$product->id}}">{{$tax !=0 ? webCurrencyConverter($tax) : 'incl.'}}</strong>
                                    </div>
                                @endif
                                <div class="d-flex flex-wrap column-gap-1">
                                    <span>{{ translate('discount') }}</span> <span>:</span>

                                    @if ($product->discount >0)
                                        @if ($product->product_type == "physical")
                                            @php($discount = \App\Utils\Helpers::getProductDiscount($product,$price))
                                            <span class="badge badge-soft-base discount{{$product->id}}">-{{webCurrencyConverter($discount)}}</span>
                                        @else
                                            @php($discount = \App\Utils\Helpers::getProductDiscount($product,$product->unit_price))
                                            <span class="badge badge-soft-base discount{{$product->id}}">-{{webCurrencyConverter($discount)}}</span>
                                        @endif
                                    @else
                                        <span class="badge text-capitalize badge-soft-secondary">{{ translate('no_discount') }}</span>
                                    @endif
                                </div>
                                <div class="d-flex column-gap-1">
                                    @if (isset($product->category))
                                        <span>{{ translate('category') }} </span> <span>:</span>
                                        <strong>{{ isset($product->category) ? $product->category->name:'' }}</strong>
                                    @endif
                                </div>

                                @if ($product->product_type == "physical")
                                    <div class="d-flex flex-wrap column-gap-1">
                                        @foreach (json_decode($product->choice_options) as $k => $choice)
                                            <div class="d-flex column-gap-1">
                                                <span> {{ translate($choice->title)}} </span> <span>:</span>
                                                <select class="no-border-select text-title variants-class{{$key}} stock_check_for_product_mobile"
                                                        data-id="{{$product->id}}" name="{{$choice->name}}">
                                                    @foreach ($choice->options as $key=>$value)
                                                        <option value="{{ $value }}">{{ ucwords($value) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endforeach
                                        @if (!empty(json_decode($product->colors)))
                                            <div class="d-flex column-gap-1">
                                                <span>{{ translate('color') }} </span> <span>:</span>
                                                <select class="no-border-select text-title variants-class{{$key}} stock_check_for_product_mobile"
                                                        data-id="{{$product->id}}" name="color">
                                                    @foreach (json_decode($product->colors) as $k=>$value)
                                                        <option value="{{ $value }}">{{ \App\Utils\get_color_name($value) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endif
                                    </div>
                                @elseif ($product['product_type'] == 'digital' && $product['digital_product_file_types'] && count($product['digital_product_file_types']) > 0 && $product['digital_product_extensions'])
                                    @php($extensionIndex=0)
                                    <div class="d-flex flex-wrap column-gap-1">
                                        <div class="d-flex column-gap-1">
                                            <span> {{ translate('Variations') }} </span> <span>:</span>
                                            <select class="no-border-select text-title stock_check_for_product_mobile" data-id="{{$product->id}}" name="variant_key">
                                                @foreach($product['digital_product_extensions'] as $extensionKey => $extensionGroup)
                                                    @if(count($extensionGroup) > 0)
                                                        @foreach($extensionGroup as $index => $extension)
                                                            <option value="{{ $extensionKey.'-'.preg_replace('/\s+/', '-', $extension) }}" {{ $extensionIndex == 0 ? 'checked' : ''}}>
                                                                {{ ucwords($extensionKey.'-'.ucwords(preg_replace('/\s+/', '-', $extension))) }}
                                                            </option>
                                                            @php($extensionIndex++)
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                @endif

                                <div class="trx-left-92 text-capitalize stock_status{{$product->id}}">
                                    @if ($product->product_type == "physical")
                                        @php($qty = isset($variation[0]) ? $variation[0]->qty : $product->current_stock)
                                        <span class="badge badge-soft-{{$qty>0 ? 'success' : 'danger'}}">
                                        {{translate($qty>0 ? 'stock_available' : 'stock_not_available')}}
                                    </span>
                                    @else
                                        <span class="badge badge-soft-success">
                                        {{translate('stock_available')}}
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-3 align-items-center">
                            <a href="javascript:" class="btn btn-outline-danger remove_wishlist_theme_fashion"
                               data-productid="{{$product->id}}"><i class="bi bi-heart-fill"></i></a>
                            <button type="submit" data-id="{{$product->id}}" class="btn btn-base add_to_cart_mobile"><i
                                        class="bi bi-cart"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        @endif
    @endforeach
</div>

@push('script')
    <script src="{{ theme_asset('assets/js/wishlist-list-data.js') }}"></script>
@endpush
