<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jumbotron;

class JumbotronController extends Controller
{
    // GET
    public function index()
    {
        $jumbotrons = Jumbotron::all();
        return response()->json($jumbotrons);
    }

    // GET per ID
    public function show($id)
    {
        $jumbotron = Jumbotron::findOrFail($id);
        return response()->json($jumbotron);
    }

    // POST
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_path' => 'nullable|image|max:2048',
        ]);

        $imagePath = $request->file('image_path') 
            ? $request->file('image_path')->store('images', 'public') 
            : null;

        $jumbotron = Jumbotron::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);

        return response()->json($jumbotron, 201); // Status 201 Created
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_path' => 'nullable|image|max:2048',
        ]);

        $jumbotron = Jumbotron::findOrFail($id);

        if ($request->file('image_path')) {
            $imagePath = $request->file('image_path')->store('images', 'public');
            $jumbotron->image_path = $imagePath;
        }

        $jumbotron->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return response()->json($jumbotron); // Status 200 OK
    }

    // DELETE
    public function destroy($id)
    {
        $jumbotron = Jumbotron::findOrFail($id);
        $jumbotron->delete();

        return response()->json(null, 204); // Status 204 No Content
    }
}
