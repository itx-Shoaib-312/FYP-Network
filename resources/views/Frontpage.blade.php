@extends('dashboard')

@section('title', 'Dashboard')



@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/styleD.css') }}">
<!-- <main>-->
<div class="card-container">

    <div class="card-single">
        <a href="{{ route('fypgroups') }}">
            <div>
                <h2>FYP Groups</h2>
                <small>click here for Details</small>
            </div>
        </a>
    </div>
    <div class="card-single">
        <a href="{{ url('supervisordata') }}">
            <div>
                <h2>Supervisors</h2>
                <small>Mr.Muhammad Azhar</small>
            </div>
        </a>
    </div>



    <div class="card-single">
        <a href="{{ route('coordinatorsdata') }}">
            <div>
                <h2>Coordinators</h2>
                <small>Mr.Ahsan Arshad</small>
            </div>
        </a>
        <div>
            <span class="fa fa-newspaper-o"></span>
        </div>
    </div>

    <div class="card-single">
        <a href="{{ route('Evaluators') }}">
            <div>
                <h2>Evaluators</h2>
                <small>Dr.Sadia</small>
            </div>
        </a>
        <div>
            <span class="fa fa-group"></span>
        </div>
    </div>
</div>
@unlessrole(['admin', 'coordinator'])
<div class="notification-icon" onclick="toggleNotificationList()">
    <span class="fa fa-bell"></span>
    <span class="notification-number">{{ count($notifications) }}</span>
</div>
@endunlessrole
<div id="notification-list" class="notification-list" style="display: none;">

    <ul>
        @foreach ($notifications as $notification)

        <li>{{$notification->message}}</li>
        @endforeach


    </ul>
</div>

<script>
    function toggleNotificationList() {
            var notificationList = document.getElementById("notification-list");
            if (notificationList.style.display === "none") {
                notificationList.style.display = "block";
            } else {
                notificationList.style.display = "none";
            }
        }
</script>

@endsection