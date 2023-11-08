<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\Toko;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index(){
        $gudang = Gudang::all();
        return view('gudang.index', ['gudang' => $gudang]);
    }

    public function store($id) {
        // $toko = Toko::select('id')->get();
        $toko = Gudang::join('toko', 'toko_id.gudang', '=', 'id.toko')->where('id', $id);
        return view('gudang.create', ['toko' => $toko]);
    }

    public function create(Request $request){

        // $toko = Gudang::where('toko_id', $request->input('toko'))->first();

        $data = [
            'nama_gudang' => $request->nama_gudang,
            'toko_id' => $request->toko_id,
            'kapasitas' => $request->kapasitas,
        ];

        $gudang = Gudang::create($data);
        return redirect(url('/gudang'))->with('success', 'berhasil menambkan data');
    }
}
