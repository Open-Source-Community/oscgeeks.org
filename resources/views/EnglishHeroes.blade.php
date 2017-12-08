@extends('layouts.app2')


@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/fr.css') }}">

@endsection

@section('JS')
    <script src="{{ asset('js/englishheroes.js') }}"></script>
    <!--End Scripts -->
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="text-center">
                <h1 class="hvr-grow wow bounceInRight" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">English
                    Heroes</h1>
            </div>

            <div>
                <img class="img-responsive wow lightSpeedIn"
                     src="https://github.com/Open-Source-Community/oscgeeks.orgImages/blob/master/EnglishHeroes.png?raw=true">
            </div>
            <br><br>
            <div class="text-center">
                <p class="hvr-float-shadow wow bounceInLeft" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
                    English Heroes's content focuses on the participants' interactions in English. We accomplish that
                    through activities such as making presentations in English, fun English related games, talking
                    about any topic in English and alot more; we also provide some basic grammar rules to help the
                    participants create well-structured sentences.
                </p>
            </div>
            <br>
        </div>
    </section>
@endsection