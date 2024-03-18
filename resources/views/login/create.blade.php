<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarrierDown — Login</title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <!-- <li>
                    <a href="/">Sign in</a>
                </li> -->
                <li>
                    <a href="/register">Sign up</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Log In</h1>
        <form method="POST" action="/login">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <p>{{ $message }}</p>
            @enderror
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <p>{{ $message }}</p>
            @enderror
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>