@extends('layouts.main-layout')
@section('content')
    <section id="home_sec">
        <div id="comics">
            @for ($i = 0; $i < 12; $i++)
                <div class="comic">
                    <h5><a href="{{ url('action') }}">Action comics</a></h5>
                </div>
            @endfor
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