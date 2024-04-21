<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class WorkSubmissionController extends Controller
{
    //
    public function SubmitWork(Request $request)
    {
      
        $request->validate([
            'event' => 'required|string',
    
        ]);

       
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName);

      
        $event = new Event();
        $event->event_name = $request->input('event');
        $event->file = $filePath;
        $event->user_id = $request->input('user_id'); 
        $event->save();

        
        return redirect()->back()->withErrors(['success' => 'successfuly saved']);
        

    }
}

