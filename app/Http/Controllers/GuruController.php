<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        $guru = Guru::all();
        return view('guru.index',compact(['guru']));
    }
    public function create(){
        return view('guru.create');
    }

    public function store(Request $request){
        Guru::create($request->except(['_token','submit']));
        return redirect('/guru');
    }

    public function edit($id){
        $guru = Guru::find($id);
        return view('guru.edit',compact(['guru']));
    }

    public function update($id, Request $request){
        $guru = Guru::find($id);
        $guru->update($request->except(['_token','submit']));
        return redirect('/guru');
    }

    public function destroy($id){
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('/guru');
    }
}
