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
                <li>
                    <a href="/dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="/study">Study</a>
                </li>
                <li>
                    <a href="/games">Games</a>
                </li>
                <li>
                    <a href="/account">Account</a>
                </li>
                <li>
                    <a href="/about">About</a>
                </li>
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>my study page</h1>
    </main>
</body>
</html>