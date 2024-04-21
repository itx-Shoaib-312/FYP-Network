<!-- resources/views/home.blade.php -->

@extends('dashboard')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right mb-3">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addSupervisorModal">
                        Add Supervisor
                    </button>
                </div>
                @include('supervisor.add-modal')
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Total Slots</th>
                            <th>Available Slots</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($supervisors as $supervisor)
                            <tr>
                                <td>{{ $supervisor->name }}</td>
                                <td>{{ $supervisor->designation }}</td>
                                <td>{{ $supervisor->total_slots }}</td>
                                <!-- Assuming 'office' is a field in your 'supervisors' table -->
                                <td>{{ $supervisor->available_slots }}</td>
                                {{-- <td>
                                    @if ($supervisor->Status == 0)
                                        <form action="{{ route('supervisor.toggleStatus', ['id' => $supervisor->id]) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-primary">Select</button>
                                        </form>
                                    @else
                                        <span class="bg-warning p-2">Selected</span>
                                    @endif
                                </td>
 --}}

                                <td>
                                    <button type="button" class="btn btn-primary editBtn"
                                        data-target="#editModal-{{ $supervisor->id }}" data-toggle="modal">
                                        Edit
                                    </button>

                                    <!-- Delete button to open the confirmation modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteModal-{{ $supervisor->id }}">
                                        Delete
                                    </button>

                                    @include('supervisor.edit-modal')
                                    @include('supervisor.delete-modal')


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



@endsection
