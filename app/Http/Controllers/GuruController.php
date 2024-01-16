<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GuruController extends Controller
{
    public function index(){

        $guru = DB::table('guru')
                ->join('barang', 'barang.id_barang', '=', 'guru.id_barang')
                ->join('satuan', 'satuan.id_satuan', '=', 'barang.id_satuan')
                ->get();

        return view('guru.index')->with('guru', $guru);
    }

    // public function index(){
    //     $guru = Guru::all();
    //     return view('guru.index',compact(['guru']));
    // }
    
    public function create(){
        $guru['barang'] = Barang::all();
        return view('guru.create',$guru);
    }

    public function store(Request $request){

        $nama = $request->nama;
        $email = $request->email;
        $no_telp = $request->no_telp;
        $alamat = $request->alamat;
        $barang = $request->barang;


        Guru::create([
            'nama'=>$nama,
            'email'=>$email,
            'no_telp'=>$no_telp,
            'alamat'=>$alamat,
            'id_barang'=>$barang

        ]);

        // Guru::create($request->except(['_token','submit']));
        return redirect('/guru');
    }

    public function edit($id,$id_barang){
        
        // $guru = DB::table('guru')->where('id', $id)->first();
        // $barang = DB::table('barang')->where('id_barang', $id_barang)->first();
        // $guru ['guru']=  Guru::find($id);
        // $barang ['barang'] = Barang::find($id_barang);
        $guru = Guru::find($id);
        $barang = Barang::all();
        return view('guru.edit',compact('guru','barang'));
    }

    public function update($id, Request $request){
        $guru = Guru::find($id);
        // $guru = Guru::find($id_barang);
        $guru->update($request->except(['_token','submit']));
        
        return redirect('/guru');
    }

    public function destroy($id){
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('/guru');
    }
}
