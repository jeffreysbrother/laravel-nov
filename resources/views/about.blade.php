@extends('layout')

@section('content')
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    About
                </div>

                <!-- NOT using blade -->
                <?php foreach ($people as $person) : ?>
                    <li><?= $person; ?></li>
                <?php endforeach; ?>

                <hr>

                <!-- USING blade -->
                @foreach ($people as $person)
                    <li>{{ $person }}</li>
                @endforeach

                {{-- conditional statement --}}
                @if (!empty($people))
                    <h1>The $people array is NOT empty</h1>
                @endif

            </div>
        </div>
    </body>
@stop