@extends('layouts.main-layout')
@section('content')
    <section id="home_sec">
        <div id="comics">
            @foreach ($comics as $comic)
                <div class="comic">
                    <a href="{{ url('action') }}">
                        <img src="{{ asset($comic['img']) }}" alt="">
                    </a>
                    <h4>{{ $comic['name'] }}</h4>
                </div>
            @endforeach
        </div>

        <nav id="home_nav">
            <ul>
                <li><a href="#">DIGITAL COMICS</a></li>
                <li><a href="#">DC MERCHANDISE</a></li>
                <li><a href="#">SUBSCRIPTION</a></li>
                <li><a href="#">COMIC SHOP LOCATOR</a></li>
                <li><a href="#">DC POWER VISA</a></li>
            </ul>
        </nav>
    </section>
    
@endsection