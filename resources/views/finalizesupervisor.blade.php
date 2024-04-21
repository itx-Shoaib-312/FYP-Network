@extends('dashboard')

@section('title', 'Home')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;

        }

        h2 {
            color: #13a2AC;
            text-align: center;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin: auto;

        }

        th,
        td {
            border: 1px solid #171b19;
            padding: 12px;
            text-align: left;
        }


        th {
            background-color: #13a2ac;
        }
    </style>



    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Finalized Supervisor List</h2>
                {{-- changes here --}}
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sr # </th>
                            <th>Supervisor Name</th>
                            <th>Project Title</th>
                            <th>Student Name </th>

                            <th>Class</th>

                        </tr>
                    </thead>
                    <tbody>
                        {{-- <tr>
                            <td>1</td>
                            <td>Mr. Muhammad Azhar</td>
                            <td>Central Coordination System</td>
                            <td>Hira Nasir <br> Isma Wajid<br> Shanza Muzaffer</td>
                            <td>20-ARID-767 <br> 20-ARID-771 <br>20-ARID-826</td>
                            <td>BSSE 7(A)</td>


                        </tr> --}}


                        @foreach ($selections as $selection)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $selection->supervisor->name }}</td>
                                <td>{{ $selection->title }}</td>
                                <td>
                                    {{ $selection->group_member_1 }} <br>
                                    {{ $selection->group_member_2 }} <br>
                                    {{ $selection->group_member_3 }}

                                </td>


                                <td>{{ $selection->class_name }}</td>
                            </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
