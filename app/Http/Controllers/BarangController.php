<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function store(Request $request)
    {
        Barang::updateOrCreate(
            ['id' => $request->id_kelas],
            [
                'harga' => str_replace(".","",$request->harga),
            ]
        );

        return response()->json([
            'harga' => Barang::where('id','1')->value('harga'),
            'success' => 'Data Berhasil Ditambahkan!']);
    }
}
