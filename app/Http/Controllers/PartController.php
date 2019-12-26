<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Part;

class PartController extends Controller
{
    public function index()
    {
        return Part::all();
    }

    public function show($id)
    {
        return Part::find($id);
    }

    public function store(Request $request)
    {
        $part = Part::create($request->all());

        return response()->json($part, 201);
    }

    public function update(Request $request, Part $part)
    {
        $part->update($request->all());

        return response()->json($part, 200);
    }

    public function delete(Part $part)
    {
        $part->delete();

        return response()->json(null, 204);
    }
}
