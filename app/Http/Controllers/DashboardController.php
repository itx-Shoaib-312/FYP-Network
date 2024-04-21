<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Selection;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function index(){
        $notifications=Announcement::all();
        $selection=Selection::all();
        
        return view('Frontpage',compact('notifications'));
    }

    


}

