<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Schedule_category;

class Schedule_categoryController extends Controller
{
    public function index()
    {
        return Schedule_category::all();
    }

    public function show(Schedule_category $schedule_category)
    {
        return  $schedule_category;
    }

    public function store(Request $request)
    {
         $schedule_category = Schedule_category::create($request->all());

        return response()->json($schedule_category, 201);
    }

    public function update(Request $request,Schedule_category $schedule_category)
    {
        $schedule_category->update($request->all());

        return response()->json($schedule_category, 200);
    }

    public function delete(Schedule_category $schedule_category)
    {
           $schedule_category->delete();

        return response()->json(null, 204);
    }
}
