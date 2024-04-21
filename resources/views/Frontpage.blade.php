@extends('dashboard')

@section('title','Dashboard')


@section('content')
<div class="wrapper">
        <header>
            <p class="current-date"></p>
            <div class="icons">
                <span id="prev" class="material-symbols-rounded">chevron_left</span>
                <span id="next" class="material-symbols-rounded">chevron_right</span>
            </div>
        </header>
        <div class="calendar">
            <ul class="weeks">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
            </ul>
            <ul class="days"></ul>
        </div>
    </div>

    <!-- <main>-->
    <div class="card-container">
        <div class="card-single">
            <div>
                <h2>FYP Groups</h2>
                <small>click here for Details</small>
            </div>
            <div>
                <span class="fa fa-shopping-cart"></span>
            </div>
        </div>
        <div class="card-single">
            <div>
                <h2>supervisors</h2>
                <small>Mr.Muhammad Azhar</small>
            </div>
            <div>
                <span class="fa fa-shopping-cart"></span>
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
                <h2> FYP students</h2>
                <small>click</small>
            </div>
            <div>
                <span class="fa fa-outdent"></span>
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
