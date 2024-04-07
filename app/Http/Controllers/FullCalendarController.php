<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;

class FullCalendarController extends Controller
{
    public function getEvent()
    {
        if (request()->ajax()) {
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
            $events = events::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)
                ->get(['id', 'title', 'start', 'end']);
            return response()->json($events);
        }
        return view('fullcalendar');
    }
    public function createEvent(Request $request)
    {
        $data = $request->except('_token');
        $events = events::insert($data);
        return response()->json($events);
    }

    public function deleteEvent(Request $request)
    {
        $event = events::find($request->id);
        return $event->delete();
    }
}

