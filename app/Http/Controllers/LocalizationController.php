<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function lang($id){
        session()->put('locale', $id);
        return redirect()->back();
    }
}
