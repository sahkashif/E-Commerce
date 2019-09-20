<ul>
    <li><a class="active"  href="index.html">home<i class="fa fa-angle-down"></i></a>
        <ul class="sub_menu">
            <li><a href="index.html">Home shop 1</a></li>
            <li><a href="index-2.html">Home shop 2</a></li>
            <li><a href="index-3.html">Home shop 3</a></li>
            <li><a href="index-4.html">Home shop 4</a></li>
        </ul>
    </li>
    <li class="mega_items"><a href="shop.html">shop<i class="fa fa-angle-down"></i></a> 
        <div class="mega_menu">
            <ul class="mega_menu_inner">
                @foreach ($categories as $category)
                <li><a href="{{ route('shop.index', ['catgory' => $category->id]) }}">{{ $category->name }}</a>
                    <ul>
                        @foreach ($category->subcategories()->get() as $subcategory)
                            <li><a href="{{ route('shop.index', ['subcatgory' => $subcategory->id]) }}">{{ $subcategory->name }}</a></li>
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