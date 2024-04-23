@extends('dashboard')
@section('title', 'Work Submission')
<link rel="stylesheet" href="{{ asset('assets/css/work.css') }}">

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


    <div class="container-fluid m-5 p-5 justify-content-between">

        <div class="card " style="width: 100%;">
            <div class="card-header ">
                <h5 class="card-title">Work Flow And Submission</h5>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>FYP Event Step</th>
                            <th> Performas </th>
                            <th>Submit Your Work</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($work as $item)
                            <tr>
                                <td>{{ $item->event_name }}</td>
                                <td>
                                    <a href="/uploads/{{ $item->file }}"
                                        download="{{ $item->file }}">{{ $item->file }}</a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#choosefile">
                                        Add Choose File
                                    </button>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>


                <div class="card-footer text-muted">
                    <!-- Button trigger modal -->

                    @if(auth()->check() && ! auth()->user()->hasRole('student') )

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Row
                    </button>

                    @endif

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Record</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('SubmitWork') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <!-- <label for="" class="form-label">Name</label> -->
                                            <input type="text" class="form-control" name="event" id=""
                                                aria-describedby="helpId" placeholder="" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Choose file</label>
                                            <input type="file" class="form-control" name="file" id=""
                                                placeholder="" aria-describedby="fileHelpId" />
                                        </div>
                                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                    {{-- choose file modal --}}

                    <div class="modal fade" id="choosefile" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Record</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="{{ route('add.work') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            <!-- <label for="" class="form-label">Name</label> -->
                                            <input type="text" class="form-control" name="event_name" id=""
                                                aria-describedby="helpId" placeholder="" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Choose file</label>
                                            <input type="file" class="form-control" name="file" id=""
                                                placeholder="" aria-describedby="fileHelpId" />
                                        </div>
                                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid m-5 p-5 justify-content-between">
        <div class="card " style="width: 100%;">
            <div class="card-header ">
                <h5 class="card-title">Submission Work</h5>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>FYP Event Step</th>
                            <th> Performas </th>
                            @if(auth()->check() && ! auth()->user()->hasRole('coordinator') )

                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($submitwork as $item)
                            <tr>
                                <td>{{ $item->event_name }}</td>
                                <td>
                                    <a href="/worksubmit/{{ $item->file }}"
                                        download="{{ $item->file }}">{{ $item->file }}</a>
                                </td>
                            @if(auth()->check() && ! auth()->user()->hasRole('coordinator') )

                                <td>
                                    <a href="{{ route('delete.work', $item->id) }}" class="btn btn-primary">
                                        <i class="fa fa-trash"></i>Delete</a>
                                </td>
                                @endif
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script> --}}



    @endsection
