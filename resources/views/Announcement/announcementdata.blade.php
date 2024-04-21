<!-- resources/views/home.blade.php -->

@extends('dashboard')

@section('title', 'Home')

@section('content')

<div class="container ">
    <div class="row">
        <div class="col-md-12">
            @if(in_array('admin', $userRoles))

            <div class="text-right mb-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserdataModal">
                    Add Announcement
                </button>
            </div>
            @endif

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Sr.No</th>

                        <th>Message</th>



                    </tr>
                </thead>
                <tbody>

                    @foreach ($userdatas as $userdata)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $userdata->message }}</td>




                        @if(in_array('admin', $userRoles))
                        <td>
                            <button type="button" class="btn btn-primary editBtn"
                                data-target="#editModal-{{ $userdata->id }}" data-toggle="modal">
                                Edit
                            </button>


                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#deleteModal-{{ $userdata->id }}">
                                Delete
                            </button>

                            @include('Announcement.edit-modal')
                            @include('Announcement.delete-modal')


                        </td>
                        @endif
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



@include('Announcement.add-modal')
@endsection