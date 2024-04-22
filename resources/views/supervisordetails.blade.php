@extends('dashboard')

@section('title', 'Supervisors Details')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-12">


            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Total Slots</th>
                        <th>Available Slots</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supervisors as $supervisor)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $supervisor?->name }}</td>
                        <td>{{ $supervisor?->designation }}</td>
                        <td>{{ $supervisor?->total_slots }}</td>
                        <td>{{ $supervisor?->available_slots }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection