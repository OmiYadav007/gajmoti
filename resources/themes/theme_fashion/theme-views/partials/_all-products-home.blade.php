<section class="all-products-section scroll_to_form_top">
    <div class="container">
        <div class="section-title">
            <div class="d-flex flex-wrap justify-content-between row-gap-2 column-gap-4 align-items-center">
                <h2 class="title mb-0 me-auto text-capitalize">{{ translate('all_products') }}</h2>
                <div class="product-count-wrapper d-flex flex-wrap justify-content-between flex-grow-1 me-auto gap-2">
                    <div class="product-count-card">
                        <h6>{{ $allProductsGroupInfo['total_products'] }}</h6><span>{{ translate('products') }}</span>
                    </div>
                    <div class="product-count-card">
                        <h6>{{ $allProductsGroupInfo['total_orders'] }}</h6><span>{{ translate('order') }}</span>
                    </div>
                    <div class="product-count-card">
                        <h6>{{ $allProductsGroupInfo['total_delivery'] }}</h6><span>{{ translate('delivery') }}</span>
                    </div>
                    <div class="product-count-card">
                        <h6>{{ $allProductsGroupInfo['total_reviews'] }}</h6><span>{{ translate('review') }}</span>
                    </div>
                </div>
                <div class="ms-auto ms-md-0 d-flex align-items-center column-gap-3">
                    <button type="button" class="btn btn-base filter-toggle d-lg-none">
                        <i class="bi bi-funnel"></i>
                    </button>
                    <a href="{{route('products')}}" id="data_form_id" class="see-all text-capitalize">
                        {{ translate('see_all') }}
                    </a>
                </div>
            </div>
        </div>
        <form action="{{ route('ajax-filter-products') }}" method="POST" id="fashion_products_list_form">
            @csrf
            <main class="main-wrapper">

                <aside class="sidebar">
                    @include('theme-views.partials.products._products-list-aside', ['categories' => $categories, 'colors' => $allProductsColorList])
                </aside>

                <article class="article">
                    <div class="scroller-wrapper">
                        <div class="scrollLeft">
                            <i class="bi bi-chevron-left"></i>
                        </div>
                        <div class="scroller-inner text-capitalize">
                            <ul class="products_navs_list">
                                <li>
                                    <label class="filter_by_all active activeFilterNav" data-key="filter_by_all">
                                        {{ translate('all') }}
                                    </label>
                                    <input type="radio" name="data_from" value="" id="filter_by_all" checked hidden>
                                </li>
                                <li>
                                    <label class="filter_by_latest activeFilterNav" data-key="filter_by_latest">
                                        {{ translate('latest_product') }}
                                    </label>
                                    <input type="radio" name="data_from" value="latest" id="filter_by_latest" hidden>
                                </li>
                                <li>
                                    <label class="filter_by_top_rated activeFilterNav" data-key="filter_by_top_rated">
                                        {{ translate('top_rated') }}
                                    </label>
                                    <input type="radio" name="data_from" value="top-rated" id="filter_by_top_rated" hidden>
                                </li>
                                <li>
                                    <label class="filter_by_discount activeFilterNav" data-key="filter_by_discount">
                                        {{ translate('discount') }}%
                                    </label>
                                    <input type="radio" name="data_from" value="discounted" id="filter_by_discount" hidden>
                                </li>
                                <li>
                                    <label class="filter_by_best_selling activeFilterNav" data-key="filter_by_best_selling">
                                        {{ translate('best_selling') }}
                                    </label>
                                    <input type="radio" name="data_from" value="best-selling" id="filter_by_best_selling" hidden>
                                </li>
                                <li>
                                    <label class="filter_by_featured activeFilterNav" data-key="filter_by_featured">
                                        {{ translate('featured') }}
                                    </label>
                                    <input type="radio" name="data_from" value="featured" id="filter_by_featured" hidden>
                                </li>
                                <li>
                                    <label class="filter_by_most_loved activeFilterNav" data-key="filter_by_most_loved">
                                        {{ translate('most_loved') }}
                                    </label>
                                    <input type="radio" name="data_from" value="most-favorite" id="filter_by_most_loved" hidden>
                                </li>
                            </ul>
                        </div>
                        <div class="scrollRight">
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    </div>

                    <div id="ajax_products_section">
                        @include('theme-views.product._ajax-products', ['products' => $allProductsList, 'page' => 1])
                    </div>

                </article>
            </main>
        </form>
    </div>
</section>
