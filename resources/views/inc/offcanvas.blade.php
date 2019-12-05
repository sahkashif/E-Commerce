<!--Offcanvas menu area start-->
<div class="off_canvars_overlay">
                
    </div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="header_support">
                            <p><i class="icon ion-android-alarm-clock"></i> Ordered before 10:00 (Dhaka), shipped today - Support: <a href="tel:+8801305775556">+880 1305775556</a></p>
                        </div>
                        <div class="header_account top">
                            <ul>
                                <li class="language"><a href="#">Language : ENG  <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">Bengali</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">Currency : BDT <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_currency">
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="header_account bottom">
                            <ul>
                                <li class="wishlist"><a href="wishlist.html"><i class="icon ion-clipboard"></i> Wishlist </a></li>
                                <li class="top_links"><a href="#"><i class="ion-gear-a"></i> Setting <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="checkout.html">Checkout </a></li>
                                        <li class="dropdown_language"><a href="/home">My Account </a></li>
                                        <li><a href="#">Wishlist</a></li>
                                         
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
                        <div class="search_container">
                           @include('inc.header.searchbar')
                        </div>
                        <div class="mini_cart_wrapper">
                            @include('inc.header.mini_cart')
                        </div>
                        <div id="menu" class="text-left ">
                           @include('inc.header.offcanvas_navbar')
                        </div>
                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@bluesden.co</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->