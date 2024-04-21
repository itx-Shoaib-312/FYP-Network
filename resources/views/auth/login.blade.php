<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #1ffcc9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 440px;
            width: 90%;
            padding: 20px;
            margin: auto;
        }

        .wrapper {
            width: 110%;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
            padding: 30px;
            /* Adjusted padding */
        }

        .title {
            background: #16a085;
            border-radius: 5px 5px 0 0;
            color: #fff;
            font-size: 30px;
            font-weight: 600;
            padding: 20px 0;
            text-align: center;
            margin-bottom: 20px;
            width: calc(105% + 40px);
            /* Extend width by 40px */
            margin-left: -30px;
            /* Move left by half of the added width */
            margin-right: -30px;
        }

        .row {
            position: relative;
            margin-bottom: 20px;
        }

        input,
        select {
            width: 100%;
            height: 45px;
            padding-left: 50px;
            border-radius: 5px;
            border: 1px solid lightgrey;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
        }

        .row i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #16a085;
        }

        input:focus,
        select:focus {
            border-color: #16a085;
        }

        .button {
            text-align: center;
            margin-top: 20px;
        }

        .button input {
            width: 100%;
            height: 45px;
            background: #16a085;
            border: none;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .button input:hover {
            background: #12876f;
        }

        .forgot-password {
            text-align: left;
            margin-top: 10px;
        }

        .forgot-password a {
            color: #16a085;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            text-align: center;
            background: #ffcccc;
        }

        @media (max-width: 768px) {
            .container {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="wrapper">
            @if ($errors->any())
                <div class="error-message">
                    <strong>Invalid Email and Password</strong>
                </div>
            @endif

            <div class="title"> Login</div>

            <form name="f1" method="POST" action="" onsubmit="return validation()">
                @csrf

                <div class="row">
                    <i class="fas fa-user"></i>
                    <input id="email" type="email" name="email" placeholder="Email" required autofocus
                        autocomplete="username">
                </div>

                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" name="password" placeholder="Password" required
                        autocomplete="current-password">
                </div>
                @role('student')
                <div class="row">
                    <i class="fas fa-layer-group"></i>
                    <select name="Degree" required>
                        <option value="" disabled selected hidden>Choose Degree</option>
                        <option value="BS(SE)">BS(SE)</option>
                        <option value="BS(CS)">BS(CS)</option>
                    </select>
                </div>
                 @endrole
           


                <div class="forgot-password">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                    @endif
                </div>

                <div class="button">
                    <input type="submit" value="Log in">
                </div>
            </form>
        </div>
    </div>

    <script>
        function validation() {
            var id = document.f1.email.value;
            var ps = document.f1.password.value;
            if (id.length == 0 && ps.length == 0) {
                alert("Email and Password fields are empty");
                return false;
            } else {
                if (id.length == 0) {
                    alert("Email is empty");
                    return false;
                }
                if (ps.length == 0) {
                    alert("Password field is empty");
                    return false;
                }
            }
        }
    </script>
</body>

</html>
