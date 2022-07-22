<?php

namespace App\Http\Controllers;

use App\Models\FrameType;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class FrameTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.FrameType.index',[
            'type_frame'=> FrameType::latest()->Paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.FrameType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required|string|max:225',]);

        FrameType::create($request->all());
        return redirect()->route('frameType.index')->withSuccess('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FrameType  $frameType
     * @return \Illuminate\Http\Response
     */
    public function show(FrameType $frameType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FrameType  $frameType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Dashboard.FrameType.edit',[
            'frameType' =>FrameType::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FrameType  $frameType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $interest = FrameType::findOrFail($id);
        $request->validate(['name'=>'required|string|max:225']);
        $interest-> update($request->all());
        return redirect()->route('frameType.index')->withUpdate('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FrameType  $frameType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FrameType::destroy($id);
        return redirect()->back()->withDelete('delete');
    }
}
