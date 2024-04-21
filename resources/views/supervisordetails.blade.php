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
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supervisors as $supervisor)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $supervisor?->name }}</td>
                        <td>{{ $supervisor?->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection