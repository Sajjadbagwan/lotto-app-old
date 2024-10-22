<header class="main-header">
        <div class="headerMenuOuter">
            <div class="header-top-section">
                <div class="container">
                    <a href="#" class="logo">
                        <img src="{{ asset('images/logo.svg') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="header-menu">
                <ul>
                    <li><a href="#">My Account</a></li>
                    <li class="has-sub">
                        <a href="#">Play History</a>
                        <span class="arrow"></span>
                        <ul class="submenu">
                            <li class="has-sub">
                                <a href="#">Play History - 1</a>
                                <span class="arrow"></span>
                                <ul class="submenu">
                                    <li><a href="#">Play History - submenu-1</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">Play History - 2</a>
                                <span class="arrow"></span>
                                <ul class="submenu">
                                    <li><a href="#">Play History - submenu-1</a></li>
                                </ul>

                            </li>
                            <li class="has-sub"> <a href="#">Play History - 3</a>
                            </li>
                            <li class="has-sub"> <a href="#">Play History - 4</a>
                            </li>
                            <li><a href="#">Play History - 5</a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="#">Awards</a>
                    </li>
                    <li class="has-sub">
                        <a href="#">Messages</a>
                    </li>
                    <li class="has-sub">
                        <a href="#">Users</a>
                    </li>
                    <li><a href="#">Wallet</a></li>
                    <li><a href="#">Refer A Friend</a></li>
                    <li class="has-sub"><a href="#">Update Your Details</a><span class="arrow"></span>
                        <ul class="submenu">
                            <li class="active"><a href="#">Your Details</a></li>
                            <li><a href="#">Your Details</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="{{ route('login') }}">Log Out</a></li> -->
                </ul>
            </div>
            <div class="menuTigger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
</header>