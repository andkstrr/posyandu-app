<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportDataItem;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        // Mencari berdasarkan nama item jika ada input pencarian
        $searchTerm = $request->input('search_item');
        $query = Item::query();

        // Jika ada pencarian berdasarkan nama, tambahkan kondisi pencarian
        if ($searchTerm) {
            $query->where('name', 'LIKE', '%' . $searchTerm . '%');
        }

        // Mengambil data item dan mengurutkannya berdasarkan nama, menggunakan simplePaginate
        $items = $query->orderBy('name', 'ASC')->simplePaginate(5);

        // Mengirim data item ke view 'item.index'
        return view('item.index', compact('items'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Validasi inputan dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
        ]);

        // Menyimpan data yang sudah divalidasi ke dalam database
        Item::create($validatedData);

        // Mengarahkan kembali ke halaman item.index dengan pesan sukses
        return redirect()->route('item.index')->with('success', 'Data barang berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Mengambil data item berdasarkan ID
        $item = Item::findOrFail($id);

        // Mengirim data item ke view 'item.edit'
        return view('item.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        // Mengambil item berdasarkan ID
        $item = Item::findOrFail($id);

        // Validasi inputan dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
        ]);

        // Mengupdate data item dengan data yang sudah divalidasi
        $item->update($validatedData);

        // Mengarahkan kembali ke halaman item.index dengan pesan sukses
        return redirect()->route('item.index')->with('success', 'Data barang berhasil diupdate.');
    }

    public function destroy($id)
    {
        // Mengambil data item berdasarkan ID
        $item = Item::findOrFail($id);

        // Menghapus data item dari database
        $item->delete();

        // Mengarahkan kembali ke halaman item.index dengan pesan sukses
        return redirect()->route('item.index')->with('success', 'Data barang berhasil dihapus!');
    }

    public function printAll()
    {
        // Mengambil semua data item
        $item = Item::all();

        // Mengirim data item ke view 'item.print'
        return view('item.print', compact('item'));
    }

    public function exportData()
    {
        // Jika hanya ingin menampilkan data dalam format JSON (opsional)
        return response()->json(Item::all());
    }

    public function exportExcel()
    {
        // Mendownload data person dalam format Excel
        return Excel::download(new ExportDataItem, 'data-item-dahlia.xlsx');
    }
}
