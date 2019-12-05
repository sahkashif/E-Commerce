<header>
    <div class="main_header">
        <!--header top start-->
        <div class="header_top">
            <div class="container">  
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="header_account">
                            <ul>
                                <li class="language"><a href="#">Language : ENG  <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">Bengali</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">Currency : BDT <i class="ion-chevron-down"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-9">
                        <div class="top_right text-right">
                            <div class="header_support">
                                <p><i class="icon ion-android-alarm-clock"></i> Ordered before 10:00 (Dhaka), shipped today - Support: <a href="tel:+8801305775556">+880 1305775556</a></p>
                            </div>
                            <div class="header_account">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html"><i class="icon ion-clipboard"></i> Wishlist </a></li>
                                    <li class="top_links"><a href="#"><i class="ion-gear-a"></i> Setting <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_links">
                                            <li><a href="checkout.html">Checkout </a></li>
                                            <li><a href="/home">My Account </a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            @guest
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    </li>
                                                @endif
                                            @else
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            @endguest
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->
        <!--header middel start-->
        <div class="header_middle sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="/"><img src={{ asset('img/logo/logo.png') }} alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="main_menu menu_position text-right"> 
                            <nav>  
                                @include('inc.header.navbar')
                            </nav> 
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--header middel end-->
        <!--header bottom satrt-->
        <div class="header_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        @include('inc.header.categories')
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <div class="bottom_right">
                            <div class="search_container">
                                @include('inc.header.searchbar')
                            </div>
                            <div class="mini_cart_wrapper">
                                @include('inc.header.mini_cart')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </div> 
</header>
<!--header area end-->