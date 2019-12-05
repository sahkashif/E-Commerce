
<ul>
    <li>
        <a class="active"  href="/">home</a>
    </li>
    <li class="mega_items"><a href="{{ route('shop.index') }}">store<i class="fa fa-angle-down"></i></a> 
        <div class="mega_menu">
            <ul class="mega_menu_inner">
                @foreach ($categories as $category)
                <li><a href="{{ route('shop.category', $category->id) }}">{{ $category->name }}</a>
                    <ul>
                        @foreach ($category->subcategories()->get() as $subcategory)
                            <li>
                                <a href="{{ route('shop.subcategory', $subcategory->id) }}">{{ $subcategory->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </li>
    
  
    <li><a href="#">Studio<i class="fa fa-angle-down"></i></a>
        <ul class="sub_menu pages">
            <li><a href="#">Audio & Visual Production</a></li>
            <li><a href="#">Band Desk</a></li>
            <li><a href="#">Concerts</a></li>
            <li><a href="#">Rehearsal Session</a></li>
            <li><a href="#">Recording Sessions</a></li>
        </ul>
    </li>
    <li><a href="/services">Services<i class="fa fa-angle-down"></i></a>
        <ul class="sub_menu pages">
            <li><a href="#">Custom Shop</a></li>
            <li><a href="#">Guitar Care </a></li>
            <li><a href="#">Drum Hood</a></li>
            <li><a href="#">Studio Design</a></li>
            <li><a href="#">Room Acoustics</a></li>
            <li><a href="#">The Amp Shop </a></li>
            <li><a href="#">Traditional point</a></li>
        </ul>
    </li>
    <li><a href="#">Courses<i class="fa fa-angle-down"></i></a>
        <ul class="sub_menu pages">
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
    <li><a href="#">About Us<i class="fa fa-angle-down"></i></a>
        <ul class="sub_menu pages">
            <li><a href="#">FAQ</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">about us</a></li>
            <li><a href="#">blog</a></li>
        </ul>
    </li>
    
</ul>