<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Exports\ExportDataPerson;
use Maatwebsite\Excel\Facades\Excel;

class PersonController extends Controller
{
    // Fungsi untuk menampilkan daftar person (pengunjung)
    public function index(Request $request)
    {
        // Ambil input pencarian dari form
        $search = $request->get('search_person');

        // Query untuk mendapatkan data person dengan pencarian nama
        $people = Person::when($search, function ($query) use ($search) {
            return $query->where('name', 'LIKE', '%' . $search . '%');
        })
        ->orderBy('name', 'ASC')
        ->simplePaginate(5);

        // Kirimkan data ke view
        return view('person.index', compact('people'));
    }


    // Fungsi untuk menampilkan form pembuatan person baru
    public function create()
    {
        //
    }

    // Fungsi untuk menyimpan data person baru
    public function store(Request $request)
    {
        // Validasi inputan dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'gender' => 'required|string',
            'birth_date' => 'required|date',
        ]);

        // Simpan data yang sudah divalidasi ke dalam database
        Person::create($validatedData);

        // Arahkan kembali ke halaman index dengan pesan sukses
        return redirect()->route('person.index')->with('success', 'Data Pengunjung berhasil ditambahkan!');
    }

    // Fungsi untuk menampilkan form edit person
    public function edit(Person $person)
    {
        // Kirim data person yang akan diedit ke view 'person.edit'
        return view('person.edit', compact('person'));
    }

    // Fungsi untuk mengupdate data person yang ada
    public function update(Request $request, Person $person)
    {
        // Validasi inputan dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'gender' => 'required|string',
            'birth_date' => 'required|date',
        ]);

        // Update data person dengan data yang sudah divalidasi
        $person->update($validatedData);

        // Arahkan kembali ke halaman index dengan pesan sukses
        return redirect()->route('person.index')->with('success', 'Data Pengunjung berhasil diupdate.');
    }

    // Fungsi untuk menghapus person dari database
    public function destroy(Person $person)
    {
        // Hapus data person
        $person->delete();

        // Arahkan kembali ke halaman index dengan pesan sukses
        return redirect()->route('person.index')->with('success', 'Data Pengunjung berhasil dihapus!');
    }

    // Fungsi untuk menampilkan semua data person tanpa pagination
    public function printAll()
    {
        // Mengambil semua data person
        $people = Person::all();

        // Kirim data ke view 'person.print'
        return view('person.print', compact('people'));
    }

    public function exportData()
    {
        // Jika hanya ingin menampilkan data dalam format JSON (opsional)
        return response()->json(Person::all());
    }

    public function exportExcel()
    {
        // Mendownload data person dalam format Excel
        return Excel::download(new ExportDataPerson, 'data-person-dahlia.xlsx');
    }
}
