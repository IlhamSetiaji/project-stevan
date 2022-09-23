<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Requests\BarangRequest;
use App\Http\Requests\SearchTahunRequest;
use App\Http\Requests\SearchRuanganRequest;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function handleUploadImage($request)
    {
        $banner = $request->file('image');
        $name = hexdec(uniqid()) . '.' . $banner->getClientOriginalExtension();
        $banner->move(public_path('uploads/dokumentasi/'), $name);
        $path = 'uploads/dokumentasi/' . $name;

        return $path;
    }

    public function store(BarangRequest $request)
    {
        $payload = $request->validated();
        $path = $this->handleUploadImage($request);
        $payload['dokumentasi'] = $path;
        try {
            Barang::create($payload);
            return redirect()->back()->with('status', 'Input berhasil');
        } catch (Exception $e) {
            return redirect()->back()->with('status', $e->getMessage());
        }
    }

    public function searchTahun()
    {
        return view('barang.search-tahun');
    }

    public function searchTahunResult(SearchTahunRequest $request)
    {
        $payload = $request->validated();
        $barang = Barang::where('tahun_perolehan', $payload['tahun'])->get();
        if (sizeof($barang) == 0) {
            return redirect()->back()->with('status', 'Data barang berdasarkan tahun tidak ditemukan, silahkan coba lagi');
        }
        return view('barang.index', compact('barang'));
    }

    public function searchRuangan()
    {
        return view('barang.search-ruang');
    }

    public function searchRuanganResult(SearchRuanganRequest $request)
    {
        $payload = $request->validated();
        $barang = Barang::where('ruangan', $payload['ruangan'])->get();
        if (sizeof($barang) == 0) {
            return redirect()->back()->with('status', 'Data barang berdasarkan ruangan tidak ditemukan, silahkan coba lagi');
        }
        return view('barang.index', compact('barang'));
    }
}
