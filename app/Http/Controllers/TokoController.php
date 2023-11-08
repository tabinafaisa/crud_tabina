<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index() {
        $toko = Toko::all();
        return view('toko.index', ['toko' => $toko]);
    }

    public function store() {
        return view('toko.create');
    }

    public function create(Request $request){
        $data = [
            'npwp' => $request->npwp,
            'nama_toko' => $request->nama_toko,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon
        ];

        $toko = Toko::create($data);
        return redirect(url('/toko'))->with('success', 'berhasil menambahkan data');
    }

    public function delete($id) {
        $toko = Toko::find($id);
        if($toko){
            $toko->delete();
            return redirect()->back()->with('notif', ['status' => false, 'msg' => 'berhasil menghapus data']);
        }


    }

    public function edit($id) {
        $toko = Toko::find($id);
        return view('toko.edit', ['toko' => $toko]);
    }

    public function update(Request $request, $id){
        $data = [
            'npwp' => $request->npwp,
            'nama_toko' => $request->nama_toko,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon
        ];

        try {
            $toko = Toko::find($id)->update($data);
        } catch (QueryException $err) {
            return redirect()->back()->with('notif', ['status' => false, 'msg' => 'gagal mengupdate data']);
        }
        return redirect(url('/toko'))->with('notif', ['status' => true, 'msg' => 'berhasil mengupdate data']);
    }
}
