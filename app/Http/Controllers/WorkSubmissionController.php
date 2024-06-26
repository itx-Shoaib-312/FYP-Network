<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\worksubmission;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class WorkSubmissionController extends Controller
{


    public function show()
    {
        $work=Event::all();
        $submitwork=worksubmission::all();
        return view('workSubmission',compact('work','submitwork'));
    }
    //
    public function SubmitWork(Request $request)
    {

        $request->validate([
            'event' => 'required|string',

        ]);


        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('uploads', $fileName);


        $event = new Event();
        $event->event_name = $request->input('event');
        $event->file = $fileName;
        $event->user_id = $request->input('user_id');
        $event->save();


        return redirect()->back()->withErrors(['success' => 'successfuly saved']);


    }

    public function AddWork(Request $request)
    {
        // dd($request->all());

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('worksubmit', $fileName);

        $work=new worksubmission;
        $work->event_name=$request->event_name;
        $work->file=$fileName;
        $work->user_id=$request->user_id;
        $work->save();
        return back();
    }

    public function DeleteWork($id)
    {
        $work=worksubmission::find($id);
        $work->delete();
        return back();
    }

    public function download($file)
    {
        return response()->download(storage_path('/app/worksubmit/'. $file));
    }

    public function filedownload($file)
    {
        return response()->download(storage_path('/app/uploads/'. $file));
    }
}
