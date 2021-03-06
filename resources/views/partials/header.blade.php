<header>
    <div class="image">
        <img src="{{ asset('images/marchio-sito-test.png') }}" alt="">
    </div>
    <nav>
        <ul class="menu">
            @foreach ($menu as $menu_item)
                <li class="{{ Request::route()->getName() === $menu_item['name'] ? 'active' : '' }}">
                    <a href="{{ route($menu_item['name']) }}">{{ $menu_item['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
