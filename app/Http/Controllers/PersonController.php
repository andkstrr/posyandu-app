<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return view('person.index', compact('people'));
    }

    public function create()
    {
        return view('person.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'gender' => 'required|string',
            'birth_date' => 'required|date',
        ]);

        Person::create($validatedData);

        return redirect()->route('person.index')->with('success', 'Data Pengunjung berhasil ditambahkan!');
    }

    public function edit(Person $person)
    {
        return view('person.edit', compact('person'));
    }

    public function update(Request $request, Person $person)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'gender' => 'required|string',
            'birth_date' => 'required|date',
        ]);

        $person->update($validatedData);

        return redirect()->route('person.index')->with('success', 'Data Pengunjung berhasil diupdate.');
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('person.index')->with('success', 'Data Pengunjung berhasil dihapus!');
    }
}
