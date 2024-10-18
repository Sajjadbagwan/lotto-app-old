<header class="main-header">
    <div class="container">
        <div class="headerMenuOuter">
            <a href="{{ url('/dashboard') }}" class="logo">
                <img src="{{ asset('images/logo.svg') }}" alt="logo">
            </a>
            <div class="header-menu">
                <ul>
                    <li><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="has-sub">
                        <a href="{{ url('/design/property-bookings') }}">Property</a>
                        <span class="arrow"></span>
                        <ul class="submenu">
                            <li class="has-sub">
                                <a href="{{ url('/design/property-bookings') }}">Property Bookings</a>
                                <span class="arrow"></span>
                                <ul class="submenu">
                                    <li><a href="{{ url('/design/property-bookings-view-booking') }}">Property Bookings - View - Booking - Requested</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="{{ url('/design/property-application-initial') }}">Property Applications - Initial (10)</a>
                                <span class="arrow"></span>
                                <ul class="submenu">
                                    <li><a href="{{ url('/design/property-application-initial-detail') }}">Property Applications - detail</a></li>
                                </ul>

                            </li>
                            <li class="has-sub"><a href="{{ url('/design/property-registration') }}">Property Registrations - Full (5)</a>
                                <span class="arrow"></span>
                                <ul class="submenu">
                                    <li><a href="{{url('/design/property-registration-property-details')}}">details</a></li>
                                    <li><a href="{{url('/design/property-registration-pricing')}}">pricing</a></li>
                                    <li><a href="{{url('/design/property-registration-spaces')}}">spaces</a></li>
                                    <li><a href="{{url('/design/property-registration-styles')}}">styles</a></li>
                                    <li><a href="{{url('/design/property-registration-colors')}}">colors</a></li>
                                    <li><a href="{{url('/design/property-registration-amenities')}}">amenities</a></li>
                                    <li><a href="{{url('/design/property-registration-rules')}}">rules</a></li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#">Properties - Active (65)</a>
                                <span class="arrow"></span>
                                <ul class="submenu">
                                    <li><a href="{{url('/design/property-registration-property-details')}}">details</a></li>
                                    <li><a href="{{url('/design/property-registration-pricing')}}">pricing</a></li>
                                    <li><a href="{{url('/design/property-registration-spaces')}}">spaces</a></li>
                                    <li><a href="{{url('/design/property-registration-styles')}}">styles</a></li>
                                    <li><a href="{{url('/design/property-registration-colors')}}">colors</a></li>
                                    <li><a href="{{url('/design/property-registration-amenities')}}">amenities</a></li>
                                    <li><a href="{{url('/design/property-registration-rules')}}">rules</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Properties - In-Active (5)</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="#">Directory</a><span class="arrow"></span>
                        <ul class="submenu">
                            <li><a href="{{ url('/design/directory-application-initial') }}">Directory Applications - Initial (10)</a></li>
                            <li><a href="{{ url('/design/directory-registration-billing') }}">Directory Applications - Full (20)</a></li>
                            <li><a href="{{ url('/design/directory-listing-active') }}">Directory Listings - Active (44)</a></li>
                            <li><a href=" {{ url('design/users-id') }}">Directory Listings - Expired (4)</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="#">Users</a><span class="arrow"></span>
                        <ul class="submenu">
                            <li class="active"><a href="{{ url('design/users-account-profile') }}">Account Profile</a></li>
                            <li><a href="{{ url('design/users-id') }}">ID</a></li>
                            <li><a href="{{ url('design/users-notes') }}">Notes</a></li>
                            <li><a href="{{ url('design/users-property-listing') }}">Property Listings</a></li>
                            <li><a href="#">Directory Listings</a></li>
                            <li><a href="#">Bookings</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Reviews</a></li>
                            <li><a href="#">Accounts</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">Enquiries</a></li>
                    <li><a href="#">Accounts</a></li>
                    <li class="has-sub"><a href="#">Settings</a><span class="arrow"></span>
                        <ul class="submenu">
                            <li class="active"><a href="{{ url('design/settings-payment-mode') }}">Payment Mode</a></li>
                            <li><a href="{{ url('design/settings-payment-delay') }}">Payment Delay</a></li>
                            <li><a href="{{ url('design/settings-stripe-keys') }}">Stripe Keys</a></li>
                            <li><a href="{{ url('design/settings-xero-keys') }}">Xero Keys</a></li>
                            <li><a href="{{ url('design/settings-cancellation-terms') }}">Cancellation Terms</a></li>
                            <li><a href="{{ url('design/settings-shs-fees') }}">SHS fees</a></li>
                            <li><a href="{{ url('design/settings-service-categories') }}">Service Categories</a></li>
                            <li><a href="{{ url('design/settings-property-attribute') }}">Property Attribute</a></li>
                            <li><a href="{{ url('design/settings-email-bcc') }}">Email Settings & BCC</a></li>
                            <li><a href="{{ url('design/settings-email-template') }}">Email Template</a></li>
                            <li><a href="{{ url('design/settings-email-chase') }}">Email Chase Frequency</a></li>
                            <li><a href="{{ url('design/settings-vat') }}">VAT</a></li>
                            <li><a href="{{ url('design/settings-booking-discount') }}">Booking Discount</a></li>
                            <li><a href="{{ url('design/settings-voucher-code') }}">Voucher Codes</a></li>
                            <li><a href="{{ url('design/settings-server-time') }}">Server Time</a></li>
                            <li><a href="{{ url('design/settings-admin-user') }}">Admin User</a></li>
                            <li><a href="{{ url('design/settings-admin-permission') }}">Admin Permission</a></li>
                            <li><a href="{{ url('design/settings-change-password') }}">Change My Password</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('login') }}">Log Out</a></li>
                </ul>
            </div>
            <div class="menu-block">
                <div class="menuBtn">
                    <div class="homeIcon"><img src="{{ asset('images/home-icon.svg') }}" alt="logo"></div>
                </div>
                <div class="profileBox">
                    <div class="closeBtn"><img src="{{ asset('images/close-white.svg') }}" alt="close"></div>
                    <div class="profileImg"><img src="{{ asset('images/header-profile.png') }}" alt="profile"></div>
                    <div class="profileContent">
                        <a href="{{ route('login') }}" class="profileLink">Logout</a>
                        <a href="#" class="profileLink">Edit Profile</a>
                    </div>
                </div>
            </div>
            <div class="menuTigger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </div>
</header>