<!DOCTYPE html>
<html>

<head>
    <title>Landing page design using html and css</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styleL.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <nav class="nav1">
            <div>
                <p>Contact Us:PMAS Arid University Rawalpindi,Phone:+92-051-9292122 ,E.mail:@uaar.edu.pk</p>
            </div>

            <div>
                <a href="{{ url('rolebutton') }}">Login</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">{{ __('Log Out') }}</button>
                </form>
            </div>
        </nav>
        <nav class="nav2">
            <div>
                <img src="Logo.jpeg">
            </div>

        </nav>
        <div class="h-text">
            <h1>CENTRAL COORDINATION SYSTEM </h1>

            <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                Let's Build Projects with us, by managing within timeline according to the standards
            </p>

            <a href="{{ url('login') }}">Login</a>


        </div>
    </header>
</body>

</html>
