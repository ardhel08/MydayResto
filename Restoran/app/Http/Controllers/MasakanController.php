<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masakan;
use Illuminate\Support\Facades\Auth;


class MasakanController extends Controller
{
    public function masakan()
    {
        $masakan = Masakan::all();
        return view('masakan')->with('masakan', $masakan);
    }
    public function daftarmenu()
    {
        $masakan = Masakan::all();
        return view('daftarmenu')->with('masakan', $masakan);
    }

    public function awal()
    {
        return view('awal');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function tambahmasakan()
    {
        return view('tambahmasakan');
    }
    public function order()
    {
        $masakan = Masakan::all();
        return view('order')->with('masakan', $masakan);
    }
    public function detailorder()
    {
        $masakan = Masakan::all();
        return view('detailorder')->with('detailorder', $masakan);
    }
    public function simpanmasakan(Request $request)
    {
        $data = new Masakan;
        $data->id_masakan = $request->idmasakan;
        $data->gambar = $request->namagambar;
        $data->nama_masakan = $request->namamasakan;
        $data->harga_masakan = $request->hargamasakan;
        $data->status_masakan = $request->statusmasakan;

        if ($data->save()) {
            return redirect()->route('masakan')->with(['sukses' => ' Data Berhasil Ditambahkan !']);
        } else {
            return redirect()->route('masakan')->with(['error' => ' Data Gagal Ditambahkan !']);
        }
    }
    //edit masakan
    public function editmasakan($id)
    {
        $masakan = Masakan::where('id_masakan', $id)->first();
        return view('editmasakan', compact('masakan'));
    }

    public function updatemasakan(Request $request)
    {
        $data = Masakan::find($request->id_masakan);
        $data->nama_masakan = $request->namamasakan;
        $data->gambar = $request->namagambar;
        $data->harga_masakan = $request->hargamasakan;
        $data->status_masakan = $request->statusmasakan;

        if ($data->update()) {
            return redirect()->route('masakan')->with(['sukses' => 'Data berhasil diubah!']);
        } else {
            return redirect()->route('masakan')->with(['error' => 'Data gagal diubah!']);
        }
    }
    //hapus masakan
    public function hapusmasakan($id_masakan)
    {
        $masakan = Masakan::where('id_masakan', $id_masakan)->first();
        if ($masakan->delete()) {
            return redirect()->route('masakan')->with(['sukses' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->route('masakan')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            if (Auth::user()->level != 0) {;
            } else {
                return $next($request);
            }
            if (Auth::user()->level != 1) {;
            } else {
                return $next($request);
            }
            if (Auth::user()->level != 2) {;
            } else {
                return $next($request);
            }
        });
    }
}
