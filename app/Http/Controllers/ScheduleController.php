<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        return Schedule::all();
    }

    public function show(Schedule $schedule)
    {
        return  $church;
    }

    public function store(Request $request)
    {
         $schedule = Schedule::create($request->all());

        return response()->json($schedule, 201);
    }

    public function update(Request $request,Schedule $schedule)
    {
        $schedule->update($request->all());

        return response()->json($schedule, 200);
    }

    public function delete(Schedule $schedule)
    {
           $church->delete();

        return response()->json(null, 204);
    }
}
