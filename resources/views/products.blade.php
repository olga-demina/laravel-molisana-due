@extends('layouts.app')

@section('title')
    Molisana | Products
@endsection

@section('main_content')
    <div class="products-bg">
        <div class="container">
            {{-- Paste lunghe --}}
            @include('components.pasta-section', [
                'title' => 'Le lunghe',
                'pasta_list' => $pasta_lunga,
            ])

            {{-- Paste corte --}}
            @include('components.pasta-section', [
                'title' => 'Le corte',
                'pasta_list' => $pasta_corta
            ])

            {{-- Paste cortissime --}}
            @include('components.pasta-section', [
                'title' => 'Le cortissime',
                'pasta_list' => $pasta_cortissima
            ])
        
        </div>
    </div>
@endsection
