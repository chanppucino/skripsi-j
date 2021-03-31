<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AnnouncementRequest;

class AnnouncementController extends Controller
{
    public function index()
    {
        $annoucement = Announcement::all();
        return view('admin.index', compact('annoucement'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(AnnouncementRequest $request)
    {
        $request->file('image')->storeAs(
            'announcementsImages',
            Str::slug($request->title, '_') . '_' . $request->file('image')->getClientOriginalName(),
            'public'
        );

        Announcement::create([
            'title' => $request->title,
            'subject' => $request->subject,
            'image' => Str::slug($request->title, '_') . '_' . $request->file('image')->getClientOriginalName(),
            'contents' => $request->contents,
        ]);

        return redirect()->route('announcement.index')->with('success', 'Announcement Added!');
    }
}
