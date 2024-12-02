<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('conferences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date_time' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        Conference::create($request->all());

        return redirect()->route('conferences.index')->with('success', 'Konferencija sėkmingai sukurta.');
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        return view('conferences.edit', compact('conference', 'id'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date_time' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        $conference = Conference::findOrFail($id);
        $conference->update($request->all());

        return redirect()->route('conferences.index')->with('success', 'Konferencija sėkmingai atnaujinta.');
    }

    public function destroy($id)
    {
        $conference = Conference::findOrFail($id);
        $conference->delete();

        return redirect()->route('conferences.index')->with('success', 'Konferencija sėkmingai pašalinta.');
    }

    public function show($id)
    {
        $conference = Conference::findOrFail($id);
        return view('conferences.show', compact('conference'));
    }
}
