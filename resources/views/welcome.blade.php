<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarrierDown</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <!-- <li>
                    <a href="/">Home</a>
                </li> -->
                @auth
                    <li>
                        <a href="#">another link for {{ auth()->user()->username }}</a>
                    </li>

                    <form method="POST" action="/logout">
                        @csrf

                        <button type="submit">Log Out</button>
                    </form>
                @else
                    <li>
                        <a href="/login">Sign in</a>
                    </li>
                    <li>
                        <a href="/register">Sign up</a>
                    </li>
                @endguest
            </ul>
        </nav>
    </header>
    <main>
        @foreach($games as $game)
            <div>
                <h2>
                    <a href="/games/{{ $game->slug }}">{{ $game->title->english_name }}</a>
                </h2>
                <h3>
                    <a href="/">{{ $game->platform->full_name }}</a>
                </h3>
            </div>    
        @endforeach
    </main>
    @if (session()->has('success'))
        <div>
            <p>{{ session()->get('success') }}</p>
        </div>
    @endif
</body>
</html>