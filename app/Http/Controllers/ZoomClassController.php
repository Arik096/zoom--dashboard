<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZoomClassController extends Controller
{
    public function index()
    {
        $links = DB::table('zoom_classes')
            ->get();

        return view('welcome', ['links' => $links]);
    }

    public function addpage()
    {
        return view('addClass');
    }

    public function addClass(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'teacher' => 'required',
            'type' => 'required',
            'link' => 'required'
        ]);

        DB::table('zoom_classes')
            ->insert([
                'title' => $request->title,
                'teacher' => $request->teacher,
                'type' => $request->type,
                'link' => $request->link
            ]);

        Session()->flash('sms', 'Class Added');
        return redirect(route('classList'));
    }

    public function updatePage($id)
    {
        $link = DB::table('zoom_classes')
            ->where('id', $id)
            ->get();

        return view('updateClass', ['link' => $link]);
    }

    public function updateClass(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'teacher' => 'required',
            'type' => 'required',
            'link' => 'required'
        ]);

        DB::table('zoom_classes')
            ->where('id', $request->id)
            ->update([
                'title' => $request->title,
                'teacher' => $request->teacher,
                'type' => $request->type,
                'link' => $request->link
            ]);

        Session()->flash('sms', 'Class Updated');
        return redirect(route('classList'));
    }

    public function deleteClass($id)
    {
        DB::table('zoom_classes')
            ->where('id', $id)
            ->delete();

        Session()->flash('sms', 'Class Deleted');
        return redirect(route('classList'));
    }
}
