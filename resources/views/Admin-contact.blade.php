@extends('dashboard')

@section('title', 'contact us(admin)')

@section('content')
    <style>
        table {
            width: 80%;
            /* Adjust the width as needed */
            margin: 0 auto;
            /* This centers the table horizontally */
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endsection
