@extends('template.base')

@section('title', 'DC Home')

@section('content')
    <main>
        <div class="top-main">
            <div class="container">
                <div class="btn-blu-before">current series</div>
                <div class="container-books">
                    @foreach ($books as $book)
                        {{-- CARD --}}
                        <div class="content-book">
                            <img src="{{ $book['thumb'] }}" alt="{{ $book['series'] }}">
                            <h6>{{ $book['series'] }}</h6>
                        </div>
                        {{-- CARD --}}
                    @endforeach

                </div>
              <div class="btn-blu-after">Load More</div>
            </div>
          </div>
    </main>
@endsection
