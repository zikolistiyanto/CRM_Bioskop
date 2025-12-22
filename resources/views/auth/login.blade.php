<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>CRM Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('assets/auth/style.css') }}">
</head>
<body>
<section class="login-section">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1>Login</h1>

        <div class="inputbox">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" name="email" required />
            <label>Email</label>
        </div>

        <div class="inputbox">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" name="password" required />
            <label>Password</label>
        </div>

        <div class="forget">
            <label>
                <input type="checkbox" name="remember" /> Remember me
            </label>
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit">Login</button>

        <div class="register">
            <p>Don't have an account? <a href="#">Register</a></p>
        </div>
    </form>
</section>

<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
