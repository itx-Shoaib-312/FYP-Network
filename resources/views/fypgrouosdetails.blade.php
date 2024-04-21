@extends('dashboard')

@section('title', 'FYP Groups Details')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-12">
          

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Project Title</th>
                        <th>Class Name</th>
                        <th>Supervisor Name</th>
                        <th>Groups Data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fypgroups as $fypgroup)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $fypgroup?->title }}</td>
                        <td>{{ $fypgroup?->class_name }}</td>
                        <td>{{ $fypgroup?->supervisor->name }}</td>
                        <td>
                            @foreach ($fypgroup->member as $member)

                            ARID: {{ $member?->group_member_1 }} - Name: {{ $member?->group_member_1_name }} <br>
                            ARID: {{ $member?->group_member_2 }} - Name: {{ $member?->group_member_2_name }} <br>
                            ARID: {{ $member?->group_member_3 }} - Name: {{ $member?->group_member_3_name }} <br>
                            @endforeach
                        </td>
                    </tr>



                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection