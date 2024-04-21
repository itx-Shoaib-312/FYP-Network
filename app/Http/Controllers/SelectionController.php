<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\Selection; // Assuming you have a Selection model
use App\Models\Supervisor;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SelectionController extends Controller
{

    public function index(){
        $supervisors=Supervisor::all();
        // $member = User::whereHas('roles',function(){
        //     $q->where(' ')
        // })->get();
// dd($member->);
        return view('TitleSelection',compact('supervisors'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $s_id = $request['supervisor_id'];

        $available = Supervisor::findOrFail($s_id);
        if($available->available_slots!=0) {
            $request->validate([
                'title' => 'required|string',
                'class_name' => 'required|string',
                'group_member_1' => 'required|integer',
                'group_member_2' => 'required|integer',
                'group_member_3' => 'required|integer',
                'supervisor_id' => 'required',
            ]);

            // dd($request);
            $selection = new Selection();
            $selection->title = $request['title'];
            $selection->class_name = $request['class_name'];
            $selection->supervisor_id = $request['supervisor_id'];
            $selection->save();

        $member = new Member();
        $member->user_id = $request->user()->id;
        $member->selection_id = $selection->id;
        $member->member_no_1 = $request['group_member_1'];
        $member->member_no_2 = $request['group_member_2'];
        $member->member_no_3 = $request['group_member_3'];
        $member->save();


    }
// $available = Supervisor::findOrFail($s_id);

// Check if available slots are greater than 0 before decrementing
if ($available->available_slots > 0) {
    $available->available_slots = $available->available_slots - 1;
    $available->save();
} else {
     return redirect()->back()->withErrors(['error' => 'No available slots left.']);
}

        // Optionally, you can redirect the user to another page after successful submission
         return back()->with('success', 'Selection submitted successfully!');
    }

    public function finalized(){
        $selections = Selection::with('supervisor')->get();
        return view('finalizesupervisor',compact('selections'));
    }
}
