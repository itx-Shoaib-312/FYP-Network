<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\Selection; // Assuming you have a Selection model
use App\Models\Supervisor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SelectionController extends Controller
{

    public function index()
    {
        $supervisors = Supervisor::all();
        // $member = User::whereHas('roles',function(){
        //     $q->where(' ')
        // })->get();
        // dd($member->);
        return view('TitleSelection', compact('supervisors'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the form data
        $s_id = $request['supervisor_id'];

        $available = Supervisor::findOrFail($s_id);
        if ($available->available_slots != 0) {
            $request->validate([
                'title' => 'required|string',
                'class_name' => 'required|string',
                'group_member_1' => 'required|string|regex:/^\d{2}-ARID-\d{3}$/',
                'group_member_2' => 'required|string|regex:/^\d{2}-ARID-\d{3}$/',
                'group_member_3' => 'required|string|regex:/^\d{2}-ARID-\d{3}$/',
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
            $member->group_member_1 = $request['group_member_1'];
            $member->group_member_2 = $request['group_member_2'];
            $member->group_member_3 = $request['group_member_3'];
            $member->group_member_1_name = $request['group_member_1_name'];
            $member->group_member_2_name = $request['group_member_2_name'];
            $member->group_member_3_name = $request['group_member_3_name'];
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

    public function finalized()
    {
        $selections = Selection::with('supervisor')->get();
        // dd($selections);
        return view('finalizesupervisor', compact('selections'));
    }
  
    public function fypgroups()
{
    if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('coordinator')) {
        $fypgroups = Selection::with('member')->get();
    } elseif (Auth::user()->hasRole('student')) {
        $fypgroups = Auth::user()->member->map(function ($member) {
            return $member->selection;
        });
    }
    elseif (Auth::user()->hasRole('supervisor')) {
        $fypgroups = Auth::user()->member->map(function ($member) {
            return $member->selection;
        });
    }
    
    return view('fypgrouosdetails', compact('fypgroups'));
}

    public function supervisor()
{
    if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('coordinator')) {
        
        $supervisors = User::whereHas('roles', function ($query) {
            $query->where('name', 'supervisor');
        })->get();
    } elseif (Auth::user()->hasRole('student')) {
       
        $supervisors = User::whereHas('roles', function ($query) {
            $query->where('name', 'supervisor');
        })->where('id', Auth::id())->get();
    } elseif (Auth::user()->hasRole('supervisor')) {
      
        $supervisors = User::where('id', Auth::id())->get();
    }

    return view('supervisordetails', compact('supervisors'));
}

public function coordinatorsdata()
{
    if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('coordinator')) {
       
        $coordinators = User::whereHas('roles', function ($query) {
            $query->where('name', 'coordinator');
        })->get();
    } elseif (Auth::user()->hasRole('student')) {
      
        $coordinators = User::whereHas('roles', function ($query) {
            $query->where('name', 'coordinator');
        })->where('id', Auth::id())->get();
    } elseif (Auth::user()->hasRole('supervisor')) {
       
        $coordinators = User::where('id', Auth::id())->get();
    }

    return view('coordinatorsdetails', compact('coordinators'));
}

    public function Evaluators()
    {
     
        
          
    
        return view('Evaluatorsdetails');
    }
}
