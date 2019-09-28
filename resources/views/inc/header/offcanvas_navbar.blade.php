<ul class="offcanvas_main_menu">
        <li class="menu-item-has-children active">
            <a href="/">Home</a>
        </li>
        <li class="menu-item-has-children">
            <a href="#">Shop</a>
            <ul class="sub-menu">
                @foreach ($categories as $category)
                    @if ($category->subcategories()->count() > 0)
                        <li class="menu-item-has-children"><a href="{{ route('shop.index', ['category' => $category->id]) }}">{{ $category->name }}</a>
                            <ul class="sub-menu">
                                @foreach ($category->subcategories()->get() as $subcategory)
                                    <li><a href="{{ route('shop.subcategory', $subcategory->id) }}">{{ $subcategory->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="menu-item-has-children">
                            <a href="{{ route('shop.category', $category->id) }}">{{ $category->name }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a href="#">blog</a>
            <ul class="sub-menu">
                <li><a href="blog.html">blog</a></li>
                <li><a href="blog-details.html">blog details</a></li>
                <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
            </ul>

        </li>
        <li class="menu-item-has-children">
            <a href="#">pages </a>
            <ul class="sub-menu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">services</a></li>
                <li><a href="faq.html">Frequently Questions</a></li>
                <li><a href="contact.html">contact</a></li>
                <li><a href="login.html">login</a></li>
                <li><a href="404.html">Error 404</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a href="my-account.html">my account</a>
        </li>
        <li class="menu-item-has-children">
            <a href="portfolio.html">portfolio</a>
        </li>
        <li class="menu-item-has-children">
            <a href="contact.html"> Contact Us</a> 
        </li>
    </ul>