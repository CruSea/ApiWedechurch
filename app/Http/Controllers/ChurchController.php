<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use App\Church;

class ChurchController extends Controller
{
    public function index()
    {
        return Church::all();
    }
    public function show(Church $church)
    {
        return  $church;
    }
    public function store(Request $request)
    {
          $church = Church::create($request->all());
        return response()->json( $church, 201);
    }
    public function update(Request $request, Church $church)
    {
        $church->update($request->all());
        return response()->json( $church, 200);
    }
    public function delete(Church $church)
    {
           $church->delete();
        return response()->json(null, 204);
    }
}
