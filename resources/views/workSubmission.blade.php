<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .button {
            display: block;
            width: 200px;
            margin: 10px auto;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            border-radius: 5px;
        }

        .student-button {
            background-color: purple;
            color: white;
        }

        .teacher-button {
            background-color: pink;
            color: white;
        }

        /* CSS Styles */
        table {
            border-collapse: collapse;
            width: 100%;
            /* margin: 10px; */
        }

        th {
            background-color: black;
            color: rgb(233, 230, 233);
            padding: 8px;
            text-align: left;
        }

        td,
        th {
            border-bottom: 1px solid #c8c7c7;
            padding: 8px;
        }

        .custom-file-input {
            display: inline-block;
            position: relative;
            overflow: hidden;
            margin: 0;
        }

        .custom-file-input input[type="file"] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            cursor: inherit;
            display: block;
        }

        .custom-file-input button {
            display: inline-block;
            /* padding: 6px 12px; */
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            color: #fff;
            background-color: rgb(130, 100, 130);
            border-color: purple;
        }
    </style>

</head>

<body>
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

        <div class="card " style="width: 70%;">
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
                        <tr>
                            <td>Student Course Evaluation</td>
                            <td>
                                <div class="button student-button">Teacher Evaluation</div>
                            </td>
                            <td>
                                <div class="custom-file-input">
                                    <input type="file" id="fileInput">
                                    <label for="fileInput">
                                        <button>Choose File</button>
                                    </label>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>


                <div class="card-footer text-muted">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Add Row
                    </button>

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
                </div>
            </div>




            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
</body>

</html>
