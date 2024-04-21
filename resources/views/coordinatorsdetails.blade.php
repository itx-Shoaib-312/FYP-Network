@extends('dashboard')

@section('title', 'Coordinators Details')

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
                    @foreach ($coordinators as $coordinator)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $coordinator?->name }}</td>
                        <td>{{ $coordinator?->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection