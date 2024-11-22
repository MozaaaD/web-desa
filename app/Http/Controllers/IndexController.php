<?php

namespace App\Http\Controllers;

use App\Models\Index;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public function index(){
        $posts = Berita::latest()->limit(3)->get();
        return view('index', compact('posts'));
    }
    public function berita(){
        $posts = Berita::latest()->get();
        return view('berita', compact('posts'));
    }
    public function dashboard(){
        $posts = Berita::all();
        return view('dashboard', compact('posts'));
    }
    public function visimisi(){
        $posts = Index::all();
        return view('visimisi', compact('posts'));
    }
    public function sejarahdesa(){
        $posts = Index::all();
        return view('sejarahdesa', compact('posts'));
    }
    public function pemerintahdesa(){
        $posts = Index::all();
        return view('pemerintahdesa', compact('posts'));
    }
    public function bpd(){
        $posts = Index::all();
        return view('bpd', compact('posts'));
    }
    public function lpmd(){
        $posts = Index::all();
        return view('lpmd', compact('posts'));
    }
    public function karangtaruna(){
        $posts = Index::all();
        return view('karangtaruna', compact('posts'));
    }
    public function rtrw(){
        $posts = Index::all();
        return view('rtrw', compact('posts'));
    }
    public function produkdesa(){
        $posts = Index::all();
        return view('produkdesa', compact('posts'));
    }
    public function potensiwisata(){
        $posts = Index::all();
        return view('potensiwisata', compact('posts'));
    }
}
