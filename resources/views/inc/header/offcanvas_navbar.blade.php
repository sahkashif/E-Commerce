<ul class="offcanvas_main_menu">
    <li class="menu-item-has-children active">
        <a href="/">Home</a>
    </li>
    <li class="menu-item-has-children">
        <a href="/shop">Shop</a>
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
    <li class="menu-item-has-children"> <a href="#">Studio</a>
        <ul class="sub-menu">
            <li><a href="#">Audio & Visual Production</a></li>
            <li><a href="#">Band Desk</a></li>
            <li><a href="#">Concerts</a></li>
            <li><a href="#">Rehearsal Session</a></li>
            <li><a href="#">Recording Sessions</a></li>
        </ul>
    </li>
  
    <li class="menu-item-has-children"> <a href="#">Services</a>
        <ul class="sub-menu">
            <li><a href="#">Custom Shop</a></li>
            <li><a href="#">Guitar Care </a></li>
            <li><a href="#">Drum Hood</a></li>
            <li><a href="#">Studio Design</a></li>
            <li><a href="#">Room Acoustics</a></li>
            <li><a href="#">The Amp Shop </a></li>
            <li><a href="#">Traditional point</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children"><a href="#">Courses</a>
        <ul class="sub-menu">
            <li><a href="#">Guitar Course</a></li>
            <li><a href="#">Bass Guitar Course</a></li>
            <li><a href="#">Electric Guitar Course</a></li>
            <li><a href="#">Music Theory Course</a></li>
            <li><a href="#">Art Course</a></li>
            <li><a href="#">Rhymes Course</a></li>
            <li><a href="#">Singing Course</a></li>
            <li><a href="#">Drums Course</a></li>
            <li><a href="#">Perussion Course </a></li>
            <li><a href="#">Piano Course</a></li>
            <li><a href="#">Violin Course</a></li>
            <li><a href="#">Flutes Course</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children"><a href="#">About Us</a>
        <ul class="sub-menu">
            <li><a href="#">FAQ</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">about us</a></li>
            <li><a href="#">blog</a></li>
        </ul>
    </li>
    
    
</ul>