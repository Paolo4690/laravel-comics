@extends('template.base')

@section('title', 'DC Comics')

@section('content')
    <main>
        <div class="blu-space">
            <div class="container">
                <div class="cont-comic">
                    <img src="{{ $books[0]['thumb'] }}" alt="">
                </div>
            </div>
        </div>
        <div class="top-main-book">
            <div class="container">
                <div class="info-book">

                    <h2>{{ $books[0]['title'] }}</h2>

                    <div class="green-sect">
                        <div class="left">
                            <span><span class="green">U.S. Price</span> {{ $books[0]['price'] }}</span>
                            <span class="green">AVAILABLE</span>
                        </div>
                        <div class="right">
                            <span>Check Availability</span>
                        </div>
                    </div>

                    <p>{{ $books[0]['description'] }}</p>
                </div>
                <div class="cont-advertisement">
                    <h6>advertisement</h6>
                    <img src="./images/adv.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="info-main-book">
            <div class="container">
                <div class="col">
                    <h3>Talent</h3>
                    <div class="cont-info-book">
                        <div class="title">Art by:</div>
                        <div class="desc text-blu">
                            <p>
                                @foreach($books[0]['artists'] as $artist)
                                    {{ $artist }},
                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="cont-info-book">
                        <div class="title">Written by:</div>
                        <div class="desc text-blu">
                            <p>
                                @foreach($books[0]['writers'] as $writers)
                                    {{ $writers }},
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>Specs</h3>
                    <div class="cont-info-book">
                        <div class="title">Series:</div>
                        <div class="desc text-blu upper">{{ $books[0]['series'] }}</div>
                    </div>
                    <div class="cont-info-book">
                        <div class="title">U.S. Price:</div>
                        <div class="desc">{{ $books[0]['price'] }}</div>
                    </div>
                    <div class="cont-info-book">
                        <div class="title">On Sale Date:</div>
                        <div class="desc">{{ $books[0]['sale_date'] }}</div>
                    </div>
                </div>
            </div>

            <div class="line-grey">
                <div class="container-line-grey">
                    <div class="box-info-dc">
                        DIGITAL COMICS
                        <div class="log comic"></div>
                    </div>
                    <div class="box-info-dc shop">
                        SHOP DC
                        <div class="log shop"></div>
                    </div>
                    <div class="box-info-dc locator">
                        COMIC SHOP LOCATOR
                        <div class="log locator"></div>
                    </div>
                    <div class="box-info-dc subscriptions">
                        SUBSCRIPTIONS
                        <div class="log subscriptions"></div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
