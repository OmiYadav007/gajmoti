<div class="product-wrapper">
    <input class="search_input_store" type="text" name="search_category_value" value="{{request('search_category_value')}}" hidden>
    <input class="search_input_store search_input_name" type="text" name="search" value="{{request('search')}}" hidden>
    <input class="search_input_store" type="text" name="search_data_form" value="{{isset($request_data)?$request_data['search_data_form']:request('data_from')}}" hidden>
    
    @if (count($products) > 0)
        @foreach($products as $product)
            @include('theme-views.partials._products-list-single-card', ['product'=>$product])
        @endforeach
    @else
        <div class="text-center pt-5 w-100">
            <div class="text-center mb-5">
                <img loading="lazy" src="{{ theme_asset('assets/img/icons/product.svg') }}" alt="{{ translate('product') }}">
                <h5 class="my-3 text-muted">{{translate('products_Not_Found')}}!</h5>
                <p class="text-center text-muted">{{ translate('sorry_no_data_found_related_to_your_search') }}</p>
            </div>
        </div>
    @endif
</div>

@if(count($products) > 0 && ceil(($products->total() / 25)) != 1)
    <ul class="search-pagination justify-content-end">
        <li>
            <label for="paginate_{{($page-1)}}" class="paginate_{{($page-1)}}">
                <i class="bi bi-chevron-left"></i>
            </label>
        </li>

        @php
            $totalPages = ceil($products->total() / 25);
            $windowSize = 1;
        @endphp

        <!-- Start of the pagination buttons -->
        @for ($i = 1; $i <= $totalPages; $i++)
            @if ($i == 1 || $i == $totalPages || ($i >= $page - $windowSize && $i <= $page + $windowSize))
                <li>
                    <label class="paginate_{{ $i }} {{ $page == $i ? 'active' : '' }}" for="paginate_{{ $i }}">{{ $i }}</label>
                    <input class="paginate_btn paginate_btn_id{{ $i }} d-none" type="radio" name="page" id="paginate_{{ $i }}" value="{{ $i }}" {{ $page == $i ? 'checked' : '' }}>
                </li>
            @endif
        @endfor

        <!-- Display '...' if the current page is not close to the start or end -->
        @if ($totalPages > 3 && $page > 2 && $page < $totalPages - 1)
            <li class="d-flex align-items-center disabled user-select-none">
                <span class="px-2">...</span>
            </li>
        @endif

        <li>
            <label for="paginate_{{($page+1)}}" class="paginate_{{($page+1)}}">
                <i class="bi bi-chevron-right"></i>
            </label>
        </li>
    </ul>

    <script>
        "use strict";

        @for ($i = 1; $i <= $totalPages; $i++)
        $('.paginate_'+{{$i}}).on('click', function (){
            inputTypeNumberClick('{{$i}}');
        })
        @endfor

        @if ($page != $totalPages)
        $('.paginate_'+{{$page}}).on('click', function (){
            inputTypeNumberClick('{{$page}}');
        })
        @endif

        @if ($page != 1)
        $('.paginate_'+{{$page-1}}).on('click', function (){
            inputTypeNumberClick('{{$page-1}}');
        })
        @endif
    </script>
@endif
