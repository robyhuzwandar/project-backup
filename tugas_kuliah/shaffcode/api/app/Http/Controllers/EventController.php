<?php

namespace  App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'sub_title' => 'required',
            'event_type' => 'required',
            'date' => 'required',
            'time' => 'required',
            'address' => 'required',
            'location' => 'required',
            'organizer' => 'required',
            'poster' => 'required',
            'body' => 'required',
        ]);

        $title = $request->input('title');
        $sub_title = $request->input('sub_title');
        $event_type = $request->input('event_type');
        $date = $request->input('date');
        $time = $request->input('time');
        $address = $request->input('address');
        $location = $request->input('location');
        $organizer = $request->input('organizer');
        $poster = $request->input('poster');
        $body = $request->input('body');

        $event = new Event([
            'title' => $title,
            'sub_title' => $sub_title,
            'event_type' => $event_type,
            'date' => $date,
            'time' => $time,
            'address' => $address,
            'location' => $location,
            'organizer' => $organizer,
            'poster' => $poster,
            'body' => $body
        ]);

        if($event->save()){
            $respon = [
                'msg' => 'Event created success',
                'Event' => $event
            ];

            return response()->json($respon, '201');
        }

        $respon = [
            'msg' => 'Event created failed'
        ];

        return response()->json($respon,'401');
    }

    public function show()
    {
        $event = Event::all();

        $respone = [
            'msg' => ' show all Event',
            'Event' => $event
        ];

        return response()->json($respone, '200');
    }

    public  function showById($id){
        $event = Event::find($id);

        $respone = [
            'msg' => 'Show Event success',
            'Event' => $event
        ];

        return response()->json($respone, '200');
    }

    public function edit(Event $event)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'sub_title' => 'required',
            'event_type' => 'required',
            'date' => 'required',
            'time' => 'required',
            'address' => 'required',
            'location' => 'required',
            'organizer' => 'required',
            'poster' => 'required',
            'body' => 'required',
        ]);

        $title = $request->input('title');
        $sub_title = $request->input('sub_title');
        $event_type = $request->input('event_type');
        $date = $request->input('date');
        $time = $request->input('time');
        $address = $request->input('address');
        $location = $request->input('location');
        $organizer = $request->input('organizer');
        $poster = $request->input('poster');
        $body = $request->input('body');

        $event = new Event([
            'title' => $title,
            'sub_title' => $sub_title,
            'event_type' => $event_type,
            'date' => $date,
            'time' => $time,
            'address' => $address,
            'location' => $location,
            'organizer' => $organizer,
            'poster' => $poster,
            'body' => $body
        ]);

        if (!$event->update()){
            return response()->json([
                'msg' => 'Updating Failed'
            ], '404');
        }

        $respone = [
            'msg' => 'Event Updated Success',
            'Event' => $event
        ];

        return response()->json($respone, '200');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if (!$event->delete()){
            return response()->json([
                'msg' => 'Event deleting Failed'
            ], '404');
        }

        $respone = [
            'msg' => 'Event deleted'
        ];

        return response()->json($respone, '200');
    }
}
