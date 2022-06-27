@extends('layouts.app')

@section('title')
    Molisana | {{ $pasta['titolo'] }}
@endsection

@section('main_content')
    <div class="primary-bg pasta-details">
        <div class="container">
            <h2>{{ $pasta['titolo'] }}</h2>
            <div class="image">
                <img src="{{ $pasta['src-h'] }}" alt="">
            </div>
            <div class="image">
                <img src="{{ $pasta['src-p'] }}" alt="">
            </div>
            <p>
                {{-- Per inserire testo con i tag html --}}
                {!! $pasta['descrizione'] !!}
            </p>
        </div>
    </div>
@endsection
