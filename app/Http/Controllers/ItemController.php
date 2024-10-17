<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        // Mencari berdasarkan nama item jika ada
        $searchTerm = $request->input('search_item');
        $query = Item::query();

        if ($searchTerm) {
            $query->where('name', 'LIKE', '%' . $searchTerm . '%');
        }

        $items = $query->orderBy('name', 'ASC')->simplePaginate(5); // Menggunakan simplePaginate

        return view('item.index', compact('items')); 
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
        ]);

        Item::create($validatedData);

        return redirect()->route('item.index')->with('success', 'Data barang berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('item.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
        ]);

        $item->update($validatedData);

        return redirect()->route('item.index')->with('success', 'Data barang berhasil diupdate.');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('item.index')->with('success', 'Data barang berhasil dihapus!');
    }

    public function printAll()
    {
        $item = Item::all(); // Mengambil semua data tanpa paginate
        return view('item.print', compact('item'));
    }
}
