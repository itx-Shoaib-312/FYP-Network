<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('other.login') }}" name="f1" onsubmit="return validation()" class="form">
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

        <!-- Choose Role -->
        <div class="row">
            <i class="fa-light fa-layer-group"></i>
            <select name="role" id="role" required>
                <option value="" disabled selected hidden>Choose Role</option>
                <option>Coordinator</option>
                <option>Supervisor</option>
            </select>
        </div>

        <!-- Forgot Password Link -->
        <div class="pass"><a href="forget_pass.php">Forgot password?</a></div>

        <!-- Submit Button -->
        <div class="row button">
            <button type="submit">Login</button>
        </div>
    </form>

    <!-- JavaScript validation for empty fields -->
    <script>
        function validation() {
            var id = document.f1.user.value;
            var ps = document.f1.pass.value;
            if (id.length == "" && ps.length == "") {
                alert("Full Name and Password fields are empty");
                return false;
            } else {
                if (id.length == "") {
                    alert("Full Name is empty");
                    return false;
                }
                if (ps.length == "") {
                    alert("Password field is empty");
                    return false;
                }
            }
        }
    </script>
</x-guest-layout>

<!-- Styling Links -->
<link rel="stylesheet" href="{{ asset('assets/css/stylef.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

<style>
    /* Responsive Styles */
    @media only screen and (max-width: 600px) {
        .row {
            width: 80%;
            margin: auto;
        }
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
        }
    }

    @media only screen and (max-width: 400px) {
        .title {
            font-size: 20px;
        }
        .row button {
            width: 100%;
        }
    }
</style>
