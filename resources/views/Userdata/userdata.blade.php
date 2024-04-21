<!-- resources/views/home.blade.php -->

@extends('dashboard')

@section('title', 'Home')

@section('content')

<div class="container ">
    <div class="row">
        <div class="col-md-12">
            <div class="text-right mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserdataModal">
                    Add users
                </button>
            </div>

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr.No</th>

                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($userdatas as $userdata)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $userdata->name }}</td>
                            <td>{{ $userdata->email }}</td>





                            <td>
                                <button type="button" class="btn btn-primary editBtn"
                                data-target="#editModal-{{ $userdata->id }}" data-toggle="modal">
                                Edit
                            </button>

                                    <!-- Delete button to open the confirmation modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#deleteModal-{{ $userdata->id }}">
                                    Delete
                                </button>

                                @include('Userdata.edit-modal')
                                @include('Userdata.delete-modal')


                            </td>
                        </tr>
                        @endforeach

                        <!-- Add more table rows if needed -->
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>



    @include('Userdata.add-modal')
    @endsection
