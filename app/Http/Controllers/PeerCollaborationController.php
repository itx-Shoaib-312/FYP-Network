<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use App\Models\MemberDetail;
use App\Models\Selection;
use Illuminate\Http\Request;

class PeerCollaborationController extends Controller
{
   public function index(){
    $get=Selection::all();
    // dd($get[supervisor_id]);
            return view('peercollaborationproject',compact('get'));
   }
   public function members($id){
    $members = Member::where('selection_id',$id)->first();
    $mem_1 = User::where('arid_no',$members['member_no_1'])->first();
    $mem_2 = User::where('arid_no',$members['member_no_2'])->first();
    $mem_3 = User::where('arid_no',$members['member_no_3'])->first();
    $detail = MemberDetail::where('member_id',$mem_1->id)->get();
    // dd($mem_1->id);
// dd($detail);
    return view('Member',compact('members','mem_1','mem_2','mem_3','detail'));

   }
   public function add_member_details(Request $request)  {
    $members = Member::where('member_no_1',auth()->user()->arid_no)->first();
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'date' => 'required|date',
        'file' => 'required|file|mimes:png,jpg,jpeg,ppt,pptx,pdf,doc,docx|max:2048',
    ]);

// dd($members->selection_id);
       $mem_detail = new MemberDetail();
    //    dd($mem_detail->selection->id);
    $mem_detail->member_id =auth()->user()->id;
    $mem_detail->selection_id =$members->selection_id;
    $mem_detail->title =$request->title;
    $mem_detail->description =$request->description;
    $mem_detail->date =$request->date;
    // dd($request->hasFile('file'), $request->all());
    if($request->hasFile('file'))
    {
        $file=$request->file('file');
        $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move('File',$filename);
        $mem_detail->file=$filename;
        // dd($mem_detail->file);
    }
    // dd($mem_detail);
    $mem_detail->save();
    return redirect()->back();

   }
   public function update_member_details(Request $request, $id){
    return redirect()->back();

   }
}
