<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $notifications = auth()->user()->unreadNotifications;


        return view('notifications', compact('notifications'));
    }



public function markNotification(Request $request, $id)
    {

       /*  dd($id); */

        auth()->user()
                ->unreadNotifications
                ->when($request->id, function ($query) use ($request) {
                    return $query->where('id', $request->id);
                })
                ->markAsRead();

                return redirect()
                ->route('home')
                ->withSuccess('visto realizado');

    }




}
