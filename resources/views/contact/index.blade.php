@extends('dashboard')

@section('title', 'contact us')


@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css/>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0" />



    <div class="container">
        <div class="content">
            <div class="left-side">

                <div class="address details">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Pmas Arid University Rawalpindi</div>

                </div>
                <div class="phone details">
                    <i class="fa-solid fa-phone"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+92-051-9292122</div>

                </div>
                <div class="email details">
                    <i class="fa-solid fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">@uaar.edu.pk</div>

                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Contact Us</div>
                <p>If you have any queries and need a help.You can freely contact us. It's our pleasure to help you.</p>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('send-message') }}" method="post">
                    @csrf
                    <div class="input-box">
                        <input type="text" placeholder="Enter your name" name="name" required /><br>

                    </div>

                    <div class="input-box">
                        <input type="text" placeholder="Enter your email" name="email" required />
                    </div>
                    <div class="input-box message-box">
                        <textarea placeholder="Enter your message" name="message" required></textarea>
                    </div>
                    <div class="button">
                        <input type="submit" value="Send Now" />
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
