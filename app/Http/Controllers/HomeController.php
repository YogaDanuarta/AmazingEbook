<?php

namespace App\Http\Controllers;
use App\Models\EBook;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        $ebooks = EBook::all();
        return view('home', compact('ebooks'));
    }

    public function ebookdetail($id){
        $ebook = EBook::find($id);
        return view('ebookdetail', compact('ebook'));
    }

}
