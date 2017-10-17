<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Denomination;

class DenominationController extends Controller
{
    public function index()
    {
        return Denomination::all();
    }

    public function show(Denomination $denomination)
    {
        return  $denomination;
    }

    public function store(Request $request)
    {
          $denomination = Denomination::create($request->all());

        return response()->json($denomination, 201);
    }

    public function update(Request $request,Denomination $denomination)
    {
        $denomination->update($request->all());

        return response()->json( $church, 200);
    }

    public function delete(Denomination $denomination)
    {
           $denomination->delete();

        return response()->json(null, 204);
    }
}
