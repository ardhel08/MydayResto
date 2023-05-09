<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Masakan;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function transaksi()
    {
        $transaksi = Transaksi::all();
        return view('laporantransaksi')->with('laporantransaksi', $transaksi);
    }
    public function laporantransaksi()
    {
        $transaksi = DB::table('transaksi')->get();

        return view('laporantransaksi', ['transaksi' => $transaksi]);
    }
    public function simpantransaksi(Request $request)
    {
        // dd($request->all());
        $transaksi = new Transaksi();
        $transaksi->id_user = Auth::user()->id;
        $transaksi->id_order = $request->idorder;
        $transaksi->costumer = $request->costumer;
        $transaksi->membayar = $request->membayar;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->dibayar = $request->dibayar;
        $transaksi->total_bayar = $transaksi->membayar - $request->dibayar;
        if ($transaksi->save()) {
            return redirect()->route('laporantransaksi')->with(['sukses' => ' Data Berhasil Ditambahkan !']);
        } else {
            return redirect()->route('laporantransaksi')->with(['error' => ' Data Gagal Ditambahkan !']);
        }
    }
    public function hapusorder($id_order)
    {
        $order = Order::where('id_order', $id_order)->first();
        if ($order->delete()) {
            return redirect()->route('detailorder')->with(['sukses' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('detailorder')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
