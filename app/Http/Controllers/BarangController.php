<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangRequest;
use App\Models\Barang;
use Exception;
use Illuminate\Http\Request;

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
}
