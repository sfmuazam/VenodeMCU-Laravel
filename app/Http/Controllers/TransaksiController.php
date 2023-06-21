<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Barang;
use App\Models\Entry;

class TransaksiController extends Controller
{
    public function index()
    {
        // return response()->json([
        //     'transaksi' => Transaksi::all(),
        // ]);

        if (request()->ajax()) {
            $transaksi = Transaksi::select('*')->with(['user']);

            return DataTables::of($transaksi)
                ->addColumn('checkbox', function ($data) {
                    return '<input type="checkbox" class="sub_chk" data-id="' . $data->id . '">';
                })->editColumn('created_at', function ($data) {
                    $created_at = $data->created_at; // Replace this with your actual created_at timestamp from Laravel
                    // Convert to UNIX timestamp
                    $timestamp = strtotime($created_at);
                    // Set the timezone to Indonesia/Jakarta (UTC+7)
                    $timezone_offset = 7 * 3600; // 7 hours * 3600 seconds/hour
                    $timestamp += $timezone_offset;
                    $indonesian_datetime = date('Y-m-d H:i:s', $timestamp);
                    return $indonesian_datetime;
                })
                ->addColumn('aksi', function ($data) {
                    // $button = '<div data-toggle="tooltip" data-id="'.$data->id.'" data-original-title="Info" class="btn btn-sm btn-icon btn-primary btn-circle mr-2 info infoTabungan"><i class="bi bi-info-circle"></i></div>';
                    $button = ' <div data-toggle="tooltip" data-id="' . $data->id . '" data-original-title="Edit" class="btn btn-sm btn-icon btn-success btn-circle mr-2 edit editTransaksi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
        <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
        <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
      </svg></div>';
                    $button .= ' <div data-toggle="tooltip" data-id="' . $data->id . '" data-original-title="Delete" class="btn btn-sm btn-icon btn-danger btn-circle mr-2 deleteTransaksi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
        <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd" />
      </svg></div>';
                    return $button;
                })->rawColumns(['checkbox', 'aksi'])->make();
        }
        $today = date('Y-m-d');
        return view('transaksi', [
            'title' => 'Transaksi',
            'jumlah' => Transaksi::count(),
            'harga' => Barang::where('id', '1')->value('harga'),
            'jumlah_hari_ini' => Transaksi::where('created_at', 'like' , "%$today%")->count(),
        ]);
    }

    public function getJumlahTransaksi()
    {
        $jumlah = Transaksi::count();
        return response()->json(['jumlah' => $jumlah]);
    }

    public function getJumlahTransaksiToday()
    {
        $today = date('Y-m-d');
        $jumlah = Transaksi::where('created_at', 'like' , "%$today%")->count();
        return response()->json(['jumlah' => $jumlah]);
    }

    public function store(Request $request)
    {
        $hargaBarang = Barang::where('id', '1')->value('harga');
        $pelanggan = User::where('uid', $request->uid)->first();

        if ($pelanggan) {
            if ($pelanggan->saldo < $hargaBarang) {
                $status = "Saldo Tidak Cukup!";
                $sisaSaldo = $pelanggan->saldo;
            } else {
                $sisaSaldo = $pelanggan->saldo - $hargaBarang;
                Transaksi::updateOrCreate(
                    ['id' => $request->id],
                    [
                        'uid' => $request->uid,
                        'saldo_awal' => $pelanggan->saldo,
                        'besar_transaksi' => $hargaBarang,
                        'sisa_saldo' => $sisaSaldo,
                    ]
                );
                User::where('uid', $request->uid)->update(
                    [
                        'saldo' => $sisaSaldo,
                    ]
                );
                $status = "Transaksi Sukses!";
            }
        } else {
            $status = "UID Belum Terdaftar!";
            $pelanggan = "-";
            $hargaBarang = "-";
            $sisaSaldo = "-";
            $entry = $request->uid;
            Entry::truncate();
            Entry::updateOrCreate(
                ['id' => $request->id_kelas],
                [
                    'uid' => $entry,
                ]
            );
        }
        $today = date('Y-m-d');
        return response()->json([
            'status' => $status,
            'pelanggan' => $pelanggan,
            'nilai_transaksi' => $hargaBarang,
            'sisa_saldo' => (int) $sisaSaldo,
            'jumlah' => Transaksi::count(),
            'jumlah_hari_ini' => Transaksi::where('created_at', 'like' , "%$today%")->count()

        ]);
    }

    public function destroy($id)
    {
        Transaksi::find($id)->delete();

        return response()->json([
            'jumlah' => Transaksi::count(),
            'success' => 'Data Berhasil Dihapus'
        ]);
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        Transaksi::whereIn('id', explode(",", $ids))->delete();
        return response()->json([
            'jumlah' => Transaksi::count(),
            'success' => "Products Deleted successfully."
        ]);
    }

}
