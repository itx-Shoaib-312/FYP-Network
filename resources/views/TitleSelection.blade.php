@extends('dashboard')

@section('title', 'Title Selection')
<link rel="stylesheet" href="{{ asset('assets/css/stylets.css') }}">

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <div id="bg"></div>

            <form method="POST" action="{{ route('selection.store') }}">
                @csrf
                <div>
                    <h1>Title Selection</h1>
                </div>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                <div class="form-field">
                    <input type="text" name="title" placeholder="Title Name" required />
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-field">
                    <input type="text" name="class_name" placeholder="Class Name" required />
                    @error('class_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-field">
                    <input type="text" name="group_member_1" placeholder="xx-ARID-xxxx"
                        value="{{ old('group_member_1') }}" required pattern="\d{2}-ARID-\d{3}"
                        title="Please enter in the format 'xx-ARID-xxxx'" />
                    <input type="text" name="group_member_1_name" placeholder="Name"
                        value="{{ old('group_member_1_name') }}" required title="Enter the Group Member Name" />
                    @error('group_member_1')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-field">
                    <input type="text" name="group_member_2" placeholder="xx-ARID-xxxx"
                        value="{{ old('group_member_2') }}" required pattern="\d{2}-ARID-\d{3}"
                        title="Please enter in the format 'xx-ARID-xxxx'" />
                    <input type="text" name="group_member_2_name" placeholder="Name"
                        value="{{ old('group_member_2_name') }}" required title="Enter the Group Member Name" />
                    @error('group_member_2')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-field">
                    <input type="text" name="group_member_3" placeholder="xx-ARID-xxxx"
                        value="{{ old('group_member_3') }}" required pattern="\d{2}-ARID-\d{3}"
                        title="Please enter in the format 'xx-ARID-xxxx'" />
                    <input type="text" name="group_member_3_name" placeholder="Name"
                        value="{{ old('group_member_3_name') }}" required title="Enter the Group Member Name" />
                    @error('group_member_3')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-field">
                    <select name="supervisor_id" class="form-control" required>
                        <option value="" disabled selected hidden>Select Supervisor</option>
                        @foreach ($supervisors as $supervisor)
                        @if ($supervisor->available_slots == 0)
                        <option value="{{ $supervisor->id }}" class="text-danger" disabled>
                            {{ $supervisor->name }} - Slots: {{ $supervisor->available_slots }}
                        </option>
                        @else
                        <option value="{{ $supervisor->id }}">
                            {{ $supervisor->name }} - Slots: {{ $supervisor->available_slots }}
                        </option>
                        @endif
                        @endforeach
                    </select>

                    @error('supervisor')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-field">
                    <button class="btn" type="submit">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection