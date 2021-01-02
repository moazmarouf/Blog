<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Models\Section;
use App\User;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('dashboard.section.index', compact('sections'));
    }
    public function create()
    {
        $users = User::select('name','id')->where('role','user')->get();
        return view('dashboard.section.create',compact('users'));
    }

    public function store(SectionRequest $request)
    {
        $section = Section::create($request->all());
        if(!is_null($request->input('user_id'))){
            $user = User::find($request->input('user_id'));
            $user->role = 'editor';
            $user->update();
        }
        return redirect() ->back()->with(['success' => 'Section Added']);
    }

    public function edit($id)
    {
        $section = Section::findOrFail($id);
        $users = User::select('name','id')->where('role','user')->get();

        return view('dashboard.section.edit',compact('users','section'));
    }
    public function update(SectionRequest $request, $id)
    {

        $section = Section::find($id);
        $section->name = $request->input('name');
        // $section->admin = $request->input('admin');

        if(is_null($request->input('user_id')) or $section->user_id != $request->input('user_id')){
            if(!is_null($section->user_id)){
                $old_admin = User::find($section->user_id);
                $old_admin->role='user';
                $old_admin->update();
            }

            $section->user_id = $request->input('user_id');
            if(!is_null($request->input('user_id')) ){
                $admin = User::find($section->user_id);
                $admin->role='editor';
                $admin->update();
            }
        }
        $section->user_id = $request->input('user_id');
        $section->update();
        return redirect()->back()->with(['success'=>'Section Updated']);
    }
    public function getDelete($id)
    {
        $section = Section::find($id);
        return view('dashboard.section.delete', compact('section'));
    }

    public
    function delete(Request $request, $id)
    {
        $section = Section::find($id);
        $section->delete();
        return redirect()->route('section.index')->with(['error'=>'Section Deleted']);
    }

}
