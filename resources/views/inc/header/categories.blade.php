<div class="categories_menu">
        <div class="categories_title">
            <h2 class="categori_toggle">ALL CATEGORIES</h2>
        </div>
        <div class="categories_menu_toggle">
            <ul>
                @foreach ($categories as $category)
                <li class="menu_item_children"><a href={{ route('shop.category', $category->id) }}> {{ $category->name }} 
                    @if ($category->subcategories()->count() > 0)
                        <i class="fa fa-angle-right"></i></a>
                        <ul class="categories_mega_menu list-group list-group-flush">
                            @foreach ($category->subcategories()->get() as $subcategory)
                            <li>
                                <a href="{{ route('shop.subcategory', $subcategory->id) }}">{{ $subcategory->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    @endif
                </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>