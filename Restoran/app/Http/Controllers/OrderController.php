<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Masakan;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function transaksi()
    {
        return view('transaksi');
    }
    public function detailorder()
    {
        $order = Order::all();
        // dd($order);
        return view('detailorder', [
            'masakan' => \App\Models\Masakan::all(),
            'detailorder' => $order
        ]);
    }

    public function simpanorder(Request $request)
    {
        // dd($request->all());
        $data = new Order;
        $data->id_user = Auth::user()->id;
        $data->costumer = $request->costumer;
        $data->namamenu = $request->namamenu;
        $data->hargamenu = $request->hargamenu;
        $data->no_meja = $request->nomeja;
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->jumlah = $request->jumlah;
        $data->status_order = $request->statusorder;
        $data->totalbayar = $data->hargamenu * $request->jumlah;
        if ($data->save()) {
            return redirect()->route('order')->with(['sukses' => ' Data Berhasil Ditambahkan !']);
        } else {
            return redirect()->route('order')->with(['error' => ' Data Gagal Ditambahkan !']);
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
