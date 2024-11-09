<?php

namespace App\Http\Controllers;

use App\Models\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index(){
        $posts = Index::all();
        return view('dashboard', compact('posts'));
    }

    public function add(){
        return view('add');
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
            Index::create([
                'user_id'=> Auth::id(),
                'username' => $request->username,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'image' => $imagePath
            ]);
            return redirect()->route('dashboard');
    }

    public function destroy($id)
    {

        $diskusi = Index::findOrFail($id);
        if (Auth::id() === $diskusi->user_id) {
            if ($diskusi->image) {
                Storage::delete('public/' . $diskusi->image);
            }
            $diskusi->delete();
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('dashboard');
        }

    }    
}
