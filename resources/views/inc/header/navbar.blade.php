<ul>
    <li>
        <a class="active"  href="/">home</a>
    </li>
    <li class="mega_items"><a href="{{ route('shop.index') }}">shop<i class="fa fa-angle-down"></i></a> 
        <div class="mega_menu">
            <ul class="mega_menu_inner">
                @foreach ($categories as $category)
                <li><a href="{{ route('shop.index', ['category' => $category->id]) }}">{{ $category->name }}</a>
                    <ul>
                        @foreach ($category->subcategories()->get() as $subcategory)
                            <li>
                                <a href="{{ route('shop.index', ['subcategory' => $subcategory->id]) }}">{{ $subcategory->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </li>
    <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
        <ul class="sub_menu pages">
            <li><a href="blog-details.html">blog details</a></li>
            <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
            <li><a href="blog-sidebar.html">blog sidebar</a></li>
            <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
        </ul>
    </li>
    <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
        <ul class="sub_menu pages">
            <li><a href="about.html">About Us</a></li>
            <li><a href="services.html">services</a></li>
            <li><a href="faq.html">Frequently Questions</a></li>
            <li><a href="contact.html">contact</a></li>
            <li><a href="login.html">login</a></li>
            <li><a href="404.html">Error 404</a></li>
        </ul>
    </li>

    <li><a href="portfolio.html">portfolio</a></li>
    <li><a href="contact.html"> Contact Us</a></li>
</ul>