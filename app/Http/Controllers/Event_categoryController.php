<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event_category;

class Event_categoryController extends Controller
{
    public function index()
    {
        return Event_category::all();
    }

    public function show(Event_category   $event_category)
    {
        return $event_category;
    }

    public function store(Request $request)
    {
         $event_category = Event_category::create($request->all());

        return response()->json($event_category, 201);
    }

    public function update(Request $request, Event_category   $event_category)
    {
        $event_category->update($request->all());

        return response()->json( $event_category, 200);
    }

    public function delete(Event_category   $event_category)
    {
          $event_category->delete();

        return response()->json(null, 204);
    }
}
