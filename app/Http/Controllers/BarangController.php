<?php

namespace App\Http\Controllers;


use App\Models\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang.barang');
    }

    public function addbarang()
    {
        return view('barang.addbarang');
    }

    public function store(Request $request)
    {

        

        //Validasi data
        $validatedData = $request->validate([
            'nm_barang' => 'required|string|max:255',
            'spec' => 'required|string',
            'departemen' => 'required|string|max:255',
            'sumber' => 'required|string',
            'jumlah' => 'required|integer|min:1',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        //Generate kode barang
        $lastBarang = BarangModel::orderBy('kd_barang','desc')->first();
        $lastNumber = $lastBarang ? intval(substr($lastBarang->kd_barang, 4)): 0;
        $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        $kodeBarang = 'BRG-' . $newNumber;

        //Upload Foto
        $fotoPath = $request->file('foto')->store('barang_photos','public');

        //Simpan ke Database

        $barang = BarangModel::create([
            'kd_barang' => $kodeBarang,
            'nm_barang' => $validatedData['nm_barang'],
            'spec' => $validatedData['spec'],
            'departemen' => $validatedData['departemen'],
            'sumber' => $validatedData['sumber'],
            'jumlah' => $validatedData['jumlah'],
            'foto' => $validatedData[$fotoPath]
        ]);

        dd($barang);



        /*
        DB::beginTransaction();
        try{
            $barang = BarangModel::create([
                'kd_barang' => $kodeBarang,
                'nm_barang' => $validatedData['nama_barang'],
                'spec' => $validatedData['spesifikasi'],
                'departemen' => $validatedData['departemen'],
                'sumber' => $validatedData['sumber_barang'],
                'jumlah' => $validatedData['jumlah_barang'],
                'foto' => $fotoPath,
            ]);

            dd($barang);

            return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
            }
        } 
        */

    }

}

