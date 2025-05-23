@extends('theme-views.layouts.app')

@section('title', translate('my_profile').' | '.$web_config['company_name'].' '.translate('ecommerce'))

@section('content')
<section class="user-profile-section section-gap pt-0">
    <div class="container">

        @include('theme-views.partials._profile-aside')

        <div class="tab-content">

            <div class="tab-pane fade show active" >
                <div class="personal-details mb-4">
                    <div class="d-flex flex-wrap justify-content-between align-items-center column-gap-4 row-gap-2 mb-4">
                        <h4 class="subtitle m-0 text-capitalize">{{ translate('personal_details') }}</h4>
                        <a href="{{route('user-account')}}" class="cmn-btn __btn-outline rounded-full text-capitalize" >
                            {{ translate('edit_profile') }}
                            @include('theme-views.partials.icons._profile-edit')
                        </a>
                    </div>
                    <ul class="personal-details-info">
                        <li>
                            <span class="name">{{ translate('name') }}</span> <span class="clone">:</span> <strong>{{$customer_detail['f_name']}} {{$customer_detail['l_name']}}</strong>
                        </li>
                        <li class="d-md-block d-none"></li>
                        <li class="d-flex">
                            <span class="name">{{ translate('phone') }}</span> <span class="clone">:</span>
                            <strong>
                                <span class="d-flex align-items-center gap-1">
                                    <span class="direction-ltr">{{$customer_detail['phone']}}</span>

                                    @if($customer_detail['phone'] && getLoginConfig(key: 'phone_verification'))
                                        @if($customer_detail['is_phone_verified'])
                                            <span class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ translate('Your_phone_is_verified') }}">
                                                <img width="16"
                                                     src="{{theme_asset('assets/img/icons/verified.svg')}}"
                                                     class="dark-support" alt="">
                                            </span>
                                        @else
                                            <span class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ translate('Phone_not_verified.') }} {{ translate('Please_verify_through_the_user_app.') }}">
                                                <img width="16"
                                                     src="{{theme_asset('assets/img/icons/verified-error.svg')}}"
                                                     class="dark-support" alt="">
                                            </span>
                                        @endif
                                    @endif
                                </span>
                            </strong>
                        </li>
                        <li class="d-md-block d-none"></li>
                        <li class="d-flex">
                            <span class="name">{{ translate('email') }}</span> <span class="clone">:</span>
                            <strong class="d-flex align-items-center gap-1">
                                {{$customer_detail['email']}}
                                @if($customer_detail['email'] && getLoginConfig(key: 'email_verification'))
                                    @if($customer_detail['is_email_verified'])
                                        <span class="cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ translate('Your_email_is_verified') }}">
                                            <img width="16"
                                                 src="{{theme_asset('assets/img/icons/verified.svg')}}"
                                                 class="dark-support" alt="">
                                        </span>
                                    @else
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ translate('Email_not_verified.') }} {{ translate('Please_verify_through_the_user_app.') }}">
                                            <img width="16"
                                                 src="{{theme_asset('assets/img/icons/verified-error.svg')}}"
                                                 class="dark-support" alt="">
                                        </span>
                                    @endif
                                @endif
                            </strong>
                        </li>
                    </ul>
                </div>
                <div class="address-details">
                    <h4 class="subtitle mb-3 text-capitalize">{{ translate('my_address') }}</h4>
                    @foreach($addresses as $address)
                        <div class="address-card mb-20px">
                            <div class="address-card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-capitalize">{{translate($address['address_type'])}}&nbsp({{ $address['is_billing']==1 ? translate('billing_address'):translate('shipping_address') }})</h6>
                                <div class="d-flex align-items-center column-gap-4">
                                    <a href="{{route('address-edit',$address->id)}}" >
                                        <img loading="lazy" src="{{ theme_asset('assets/img/icons/edit.png') }}" alt="{{ translate('address') }}">
                                    </a>
                                    <a href="javascript:" class="route_alert_function"
                                     data-routename="{{ route('address-delete',['id'=>$address->id]) }}"
                                     data-message="{{ translate('want_to_delete_this_address?') }}"
                                     data-typename=""
                                     >
                                        <img loading="lazy" src="{{ theme_asset('assets/img/icons/trash.png') }}" alt="{{ translate('trash') }}">
                                    </a>
                                </div>
                            </div>
                            <div class="address-card-body">
                                <div class="row">
                                    <ul class="col-sm-6">
                                        <li>
                                            <span class="name">{{ translate('name') }}</span>
                                            <span class="info">{{$address['contact_person_name']}}</span>
                                        </li>
                                        <li>
                                            <span class="name">{{ translate('phone') }}</span>
                                            <span class="info">{{$address['phone']}}</span>
                                        </li>
                                        <li>
                                            <span class="name">{{ translate('address') }}</span>
                                            <span class="info">{{$address['address']}}</span>
                                        </li>
                                    </ul>
                                    <ul class="col-sm-6">
                                        <li>
                                            <span class="name text-capitalize">{{ translate('zip_code') }}</span>
                                            <span class="info">{{$address['zip']}}</span>
                                        </li>
                                        <li>
                                            <span class="name">{{ translate('city') }}</span>
                                            <span class="info">{{$address['city']}}</span>
                                        </li>
                                        <li>
                                            <span class="name">{{ translate('country') }}</span>
                                            <span class="info">{{$address['country']}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    <div class="personal-details add-address-btn-container text-center text-md-start">
                        <a class="text-base add-address-btn text-capitalize" href="{{route('account-address-add')}}">+{{ translate('add_address') }}</a>
                    </div>

                    @if ($addresses->count() <= 0)
                    <div class="text-center pt-5 w-100">
                        <div class="text-center mb-5">
                            <img loading="lazy" src="{{ theme_asset('assets/img/icons/address.svg') }}" alt="{{ translate('address') }}">
                            <h5 class="my-3 pt-4 text-muted">{{translate('no_Saved_Address_Found')}}!</h5>
                            <p class="text-center text-muted">{{ translate('please_add_your_address_for_your_better_experience') }}</p>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
