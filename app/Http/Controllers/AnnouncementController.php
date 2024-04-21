<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{

    public function index()
    {
        // $user = Auth::user();
        // if ($user->hasRole('admin')) {

        // } else {

        // }
        $user = Auth::user();


        $userRoles = [];


        if ($user) {

            $userRoles = $user->getRoleNames()->toArray();
        }
 
        $userdatas = Announcement::all();


        return view('Announcement.announcementdata ', compact('userdatas', 'userRoles'));
    }
    public function create()
    {

        return view('Announcement/add_announcement');
    }



    public function store(Request $request)
    {

$validatedData = $request->validate([
    'message' => 'required|string',
   
]);

        $user = new Announcement();
        $user->message = $validatedData['message'];
        $user->save();
        return redirect()->back()->with('success', 'Announcement added successfully');
    }

    public function update(Request $request, $id)

    {

        $request->validate([
            'message' => 'nullable',

        ]);

        $userdata  = Announcement::findOrFail($id);

        $userdata->message = $request->input('message');

        $userdata->save();

        return redirect()->back()->with('success', 'Announcement updated successfully');
    }


    public function destroy($id)
    {
        $userdata = Announcement::findOrFail($id);
        $userdata->delete();

        return redirect()->back()->with('success', 'Announcement  deleted successfully');
    }
}
