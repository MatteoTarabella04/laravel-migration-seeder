<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel | @yield('title', 'home')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">

        <div class="container py-5">
            <div class="row row-cols-3 g-4">
                @forelse ($trains as $train)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $train->company }}</h4>
                                <ul>
                                    <li>
                                        <b>S:</b> {{ $train->start_station }}
                                    </li>
                                    <li>
                                        <b>A:</b> {{ $train->arrive_station }}
                                    </li>
                                    <li>
                                        <b>Start at:</b> {{ $train->start_time }}
                                    </li>
                                    <li>
                                        <b>Arrive at:</b> {{ $train->arrive_time }}
                                    </li>
                                    <li>
                                        <b>Coaches N:</b> {{ $train->coaches_no }}
                                    </li>
                                    <li>
                                        @if ($train->on_time)
                                            <b>On Time</b>
                                        @else
                                            <b>Deleay</b>
                                        @endif
                                    </li>
                                    <li>
                                        @if ($train->cancelled)
                                            <b>Cancelled</b>
                                        @else
                                            <b>Confirmed</b>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col">
                        <h3>No Trains at the moment. Try later</h3>
                    </div>
                @endforelse
            </div>
        </div>

    </main>

</body>

</html>
