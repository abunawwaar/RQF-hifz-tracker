<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracker;
class TrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackers = Tracker::all();
        return view('trackers.index')->with('trackers', $trackers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trackers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tracker = new Tracker();
        $tracker->student_id = $request->student_id;
        $tracker->entry_type = $request->entry_type;
        $tracker->from_hisbu = $request->from_hisbu;
        $tracker->from_rubu = $request->from_rubu;
        $tracker->from_page = $request->from_page;
        $tracker->from_ayah = $request->from_ayah;
        $tracker->to_hisbu = $request->to_hisbu;
        $tracker->to_rubu = $request->to_rubu;
        $tracker->to_page = $request->to_page;
        $tracker->to_ayah = $request->to_ayah;
        $tracker->date = $request->date;

        $tracker->save();

        return redirect()->route('trackers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tracker $tracker)
    {
        return view('trackers.show')->with('tracker', $tracker);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracker $tracker)
    {
        return view('trackers.edit')->with('tracker', $tracker);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracker $tracker)
    {
        $tracker->student_id = $request->student_id;
        $tracker->entry_type = $request->entry_type;
        $tracker->from_hisbu = $request->from_hisbu;
        $tracker->from_rubu = $request->from_rubu;
        $tracker->from_page = $request->from_page;
        $tracker->from_ayah = $request->from_ayah;
        $tracker->to_hisbu = $request->to_hisbu;
        $tracker->to_rubu = $request->to_rubu;
        $tracker->to_page = $request->to_page;
        $tracker->to_ayah = $request->to_ayah;
        $tracker->date = $request->date;
        $tracker->save();
        return redirect()->route('trackers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracker $tracker)
    {
        $tracker->delete();
        return redirect()->route('trackers.index');
    }
}
