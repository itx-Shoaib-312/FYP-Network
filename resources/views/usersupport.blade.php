@extends('dashboard')

@section('title', 'Contact Us')

@section('content')


    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-location-dot"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Pmas Arid University Rawalpindi</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+92-051-9292122</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">info@uaar.edu.pk</div>
                </div>
            </div>
            <div class="right-side">
                <div class="topic-text">Contact Us</div>
                <p>If you have any queries and need help, you can freely contact us. It's our pleasure to
                    help you.</p>
                <form action="#">
                    <div class="input-box">
                        <input type="text" placeholder="Enter your name" />
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Enter your email" />
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Enter your Arid NO" />
                    </div>
                    <div class="input-box message-box">
                        <textarea placeholder="Enter your message"></textarea>
                    </div>
                    <div class="button">
                        <input type="button" value="Send Now" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
