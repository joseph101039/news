<?php

namespace App\Http\Controllers;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;      // different namespace with App

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notificationList = Notification::all();

        return view('notifications.index', compact('notificationList'));
    }

    /**
     * Show the form for creating a notification resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('notifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $notification = new Notification();
        $notification->first_name = $request->first_name ?? null;
        $notification->last_name = $request->last_name ?? null;
        $notification->save();
        return redirect('/notifications');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        return view('notifications.edit', compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)  
    {
        //
        $notification = Notification::find($id);
        $notification->first_name = $request->first_name;
        $notification->last_name  = $request->last_name;
        $notification->save();
        return redirect('/notifications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        $notification->delete();
        return redirect('/notifications');
    }
}
