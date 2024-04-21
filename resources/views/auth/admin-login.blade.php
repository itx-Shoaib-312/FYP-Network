<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Stylesheet Links -->
    <link rel="stylesheet" href="{{ asset('assets/css/styleAd.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
        /* Responsive Styles */
        @media only screen and (max-width: 600px) {
            .form .row {
                width: 80%;
                margin: auto;
            }

            .form input[type="text"],
            .form input[type="password"] {
                width: 100%;
            }
        }

        @media only screen and (max-width: 400px) {
            .form .title {
                font-size: 20px;
            }

            .form .row.button button {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('admin.login') }}" class="form">
            @csrf

            <!-- Full Name -->
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" id="user" name="user" placeholder="Full Name" required>
            </div>

            <!-- Password -->
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" id="pass" name="pass" placeholder="Your CNIC" required>
            </div>

            <!-- Submit Button -->
            <div class="row button">
                <button type="submit">Login</button>
            </div>
        </form>
    </x-guest-layout>
</body>

</html>
