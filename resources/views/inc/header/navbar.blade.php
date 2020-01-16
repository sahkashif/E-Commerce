
<ul>
    <li>
        <a class="active"  href="/">home</a>
    </li>
    <li class="mega_items"><a href="{{ route('shop.index') }}">store<i class="fa fa-angle-down"></i></a> 
        <div class="mega_menu container row">
            <ul class="mega_menu_inner row">
                @foreach ($categories as $category)
                <li class="col-4"><a href="{{ route('shop.category', $category->id) }}">{{ $category->name }}</a>
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
    
  
    <li><a href="/studios">Studios</a>
        <ul class="sub_menu pages">
            <li><a href="#">Audio & Visual Production</a></li>
            <li><a href="#">Band Desk</a></li>
            <li><a href="#">Concerts</a></li>
            <li><a href="#">Rehearsal Session</a></li>
            <li><a href="#">Recording Sessions</a></li>
        </ul>
    </li>
    <li><a href="/services">Services</a>
        
    </li>
    <li><a href="/courses">Courses</a>
        
    </li>
    <li><a href="/aboutUs">About Us</a>
        <ul class="sub_menu pages">
            <li><a href="#">about us</a></li>
            <li><a href="#">contact us</a></li>
            <li><a href="#">FAQ</a></li>
            
        </ul>
    </li>
    
</ul>