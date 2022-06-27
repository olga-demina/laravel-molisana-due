<section>
    <h2>{{ $title }}</h2>
    <div class="products-list">
        @foreach ($pasta_list as $pasta)
            @include('components.pasta-card', [
                'id' => $pasta['id'],
                'image' => $pasta['src'],
                'title' => $pasta['titolo']
            ])
        @endforeach
    </div>
</section>
