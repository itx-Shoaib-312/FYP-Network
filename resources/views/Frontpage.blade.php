@extends('dashboard')

@section('title', 'Dashboard')


@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/styleD.css') }}">
    <!-- <main>-->
    <div class="card-container">
        <div class="card-single">
            <div>
                <h2>FYP Groups</h2>
                <small>click here for Details</small>
            </div>

        </div>
        <div class="card-single">
            <div>
                <h2>supervisors</h2>
                <small>Mr.Muhammad Azhar</small>
            </div>

        </div>

        <div class="card-single">
            <div>
                <h2>Coordinators</h2>
                <small>Mr.Ahsan Arshad</small>
            </div>
            <div>
                <span class="fa fa-newspaper-o"></span>
            </div>
        </div>


        <div class="card-single">
            <div>
                <h2>Evaluators</h2>
                <small>Dr.Sadia</small>
            </div>
            <div>
                <span class="fa fa-group"></span>
            </div>

        </div>
    </div>

@endsection
