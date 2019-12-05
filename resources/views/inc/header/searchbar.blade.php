<form action="#">
    <div class="hover_category">
        <select class="select_option" name="select" id="categori1">
            <option selected value="0">All Categories</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>                        
    </div>
    <div class="search_box">
        <input placeholder="Search product..." type="text">
        <button type="submit">Search</button> 
    </div>
</form>