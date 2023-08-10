<div>
    <ul class="nav-menu">
        <li><a href="#">{{ isset($currentCategory ) ? ucwords($currentCategory->name) : 'Categories'}}</a>
            <ul class="sub-menu">
                @foreach ($categories as $category)
    
                    <li class="{{ isset($currentCategory ) && $currentCategory->is($category) ? 'active' : ''}}"><a
                            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}">{{ ucwords($category->name) }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
    
    </ul>
</div>