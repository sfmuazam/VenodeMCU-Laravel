<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function store(Request $request)
    {
        $entry = $request->uid;
        Entry::truncate();
        Entry::updateOrCreate(
            ['id' => $request->id_kelas],
            [
                'uid' => $entry,
            ]
        );

        return response()->json([
            'status' => 'Data Berhasil Ditambahkan!']);
    }
}
