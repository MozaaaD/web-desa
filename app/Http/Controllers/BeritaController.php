<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function add(){
        return view('post.add');
    }

    public function edit($id){
        $data = Berita::findOrFail($id);
        return view('post.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $data = Berita::find($id);
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('diskusis', 'public');
            $data->image = $imagePath;
        }

        $data->username = $request->username;
        $data->judul = $request->judul;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        return redirect()->route('dashboard');
    }

    public function tambah(Request $request){
        $request->validate([
            'username'=>('required'),
            'judul'=>('required'),
            'deskripsi'=>('required'),
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048' 
        ]);   
        $imagePath = 'kosong';
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('diskusis', 'public');
        }
            Berita::create([
                'user_id'=> Auth::id(),
                'username' => $request->username,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'image' => $imagePath
            ]);
            return redirect()->route('dashboard');
    }

    public function destroy($id){

        $berita = Berita::findOrFail($id);
        if (Auth::id() === $berita->user_id) {
            if ($berita->image) {
                Storage::delete('public/' . $berita->image);
            }
            $berita->delete();
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('dashboard');
        }

    }    

    public function detail($id){
        $data = Berita::findOrFail($id);
        return view('detail', compact('data'));
    }
}
