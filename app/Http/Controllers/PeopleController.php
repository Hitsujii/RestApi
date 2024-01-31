<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function index()
    {
        return People::all();
    }

    public function store(Request $request)
    {
        $person = People::create($request->all());
        return response()->json($person, 201);
    }

    public function show($id)
    {
        return People::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $person = People::findOrFail($id);
        $person->update($request->all());
        return response()->json($person, 200);
    }

    public function destroy($id)
    {
        People::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
