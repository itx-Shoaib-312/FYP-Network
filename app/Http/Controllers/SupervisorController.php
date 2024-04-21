<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    //
    public function index(){
        $supervisors=Supervisor::all();

        return view('supervisor.supervisor',compact('supervisors'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'total_slots' => 'required|integer',
            'available_slots' => 'required|integer',
            'status' => 'required|in:0,1',
        ]);

        $status = ($validatedData['status'] == '1') ? 1 : 0;

        $supervisor = new Supervisor();
        $supervisor->name = $validatedData['name'];
        $supervisor->designation = $validatedData['designation'];
        $supervisor->total_slots = $validatedData['total_slots'];
        $supervisor->available_slots = $validatedData['available_slots'];
        $supervisor->status = $status;
        $supervisor->save();

        return redirect()->back()->with('success', 'Supervisor added successfully');
    }

    public function toggleStatus($id)
    {
        $supervisor = Supervisor::findOrFail($id);
        $supervisor->status = ($supervisor->status == 1) ? 0 : 1;
        $supervisor->save();
        return redirect()->back()->with('success', 'Status toggled successfully');
    }


public function update(Request $request, $id)

{
    $request->validate([
        'name' => 'required|string',
        'designation' => 'required|string',
        'total_slots' => 'required|integer',
        'available_slots' => 'required|integer',
        'status' => 'required|in:0,1',
    ]);
    $supervisor = Supervisor::findOrFail($id);

    $supervisor->name = $request->input('name');
    $supervisor->designation = $request->input('designation');
    $supervisor->total_slots = $request->input('total_slots');
    $supervisor->available_slots = $request->input('available_slots');
    $supervisor->status = $request->input('status');

    $supervisor->save();

    return redirect()->back()->with('success', 'Supervisor updated successfully');
}


public function destroy($id)
{
    $supervisor = Supervisor::findOrFail($id);
    $supervisor->delete();

    return redirect()->back()->with('success', 'Supervisor deleted successfully');
}


}
