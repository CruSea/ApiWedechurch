<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class Favorite_churchController extends Controller
{
     public function index()
    {
        // return favorite_churches::all();
        
             $favorite_churches = DB::table('favorite_churches')->get();
        
         // return response()->json($favorite_churches, 200);
         return response()->json(['data'=> $favorite_churches->toArray(),]);
            
        

    }

    public function show(favorite_churches $favorite_churches)
    {
        return  $favorite_churches;
    }

    public function store(Request $request)
    {
          $favorite_churches = favorite_churches::create($request->all());

        return response()->json($favorite_churches, 201);
    }

    public function update(Request $request, favorite_churches $favorite_churches)
    {
        $favorite_churches->update($request->all());

        return response()->json( $favorite_church, 200);
    }

    public function delete(favorite_churches $favorite_churches)
    {
           $favorite_churches->delete();

        return response()->json(null, 204);
    }
}
