@extends('layouts.app2')


@section('CSS')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/blenderworkshop2.css') }}">

@endsection

@section('JS')
    <script src="{{ asset('js/blenderworkshop.js') }}"></script>
    <!--End Scripts -->
@endsection

@section('content')
    <section class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.5s" offset="200">
        <div class="container">
            <div class="text-center">
                <h1 class="hvr-pop">Blender Workshop</h1>
            </div>
            <div class="hvr-glow">
                <h2>Blender workshop enters you to the gate of 3D art.</h2>
                <h3>The workshop consists of 5 sessions, after the workshop you will be able to :</h3>
                <span>1. Model your own design.</span><br>
                <span>2. Create advanced material (shades + textures).</span><br>
                <span>3. Unwrap and texture your model.</span><br>
                <span>4. Make advanced material with maps.</span><br>
                <span>5. Light your project.</span><br>
                <span>6. Make you own light setup.</span><br>
                <span>7. Improve your project to realism using compositing.</span><br><br>
                <div class="note">
                    <h4>At the end of the workshop sessions, there will be a final competition that will be held between
                        all the members of the workshop in form of teams, and there will be a special gift for the
                        winning team.</h4>
                </div>
            </div>
        </div>
    </section>

@endsection