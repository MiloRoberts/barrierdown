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
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/login">Sign in</a>
                </li>
                <li>
                    <a href="/register">Sign up</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div>
            <h2>
                <a href="/games/{{ $game->slug }}">{{ $game->title->english_name }}</a>
            </h2>
            <h3>
                <a href="/">{{ $game->platform->full_name }}</a>
            </h3>
        </div>    
    </main>
</body>
</html>