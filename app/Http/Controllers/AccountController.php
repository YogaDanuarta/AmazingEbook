<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function displayregister(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('register');
    }

    public function displaylogin(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('login');
    }

    public function startlogin(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'message' => 'Invalid credentials'
        ]);
    }

    public function logout() {
        Auth::logout();
        return view('logoutsuccess');
    }

    public function startregister(Request $request) {

        $rules = [
            'first_name' => 'required|string|max:25',
            'middle_name' => 'nullable|string|max:25',
            'last_name' => 'required|string|max:25',
            'email' => 'required|email|unique:accounts',
            'gender_id' => 'required',
            'role_id' => 'required',
            'password' => 'required|min:8|max:25|regex:/^(?=.*[0-9])(?=.*[a-zA-Z])\w{8,}$/',
            'image' => 'required|image',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $account_id = 0;
        $latest_account = Account::first()->orderBy('account_id', 'desc')->first();
        if($latest_account == null) {
            $account_id = 1;
        } else {
            $account_id = $latest_account->account_id + 1;
        }

        $account = new Account();

        $account->account_id = strval($account_id);
        $account->role_id = $request->role_id;
        $account->gender_id = $request->gender_id;
        $account->first_name = $request->first_name;
        $account->middle_name = $request->middle_name;
        $account->last_name = $request->last_name;
        $account->email = $request->email;
        $account->password = Hash::make($request->password);

        $file = $request->file('image');
        $fileName = time().$file->getClientOriginalName();
        Storage::putFileAs('public/images', $file, $fileName);
        $account->display_picture_link = 'images/'.$fileName;

        $account->save();

        return redirect('/login');
    }

    function profile(){
        $account = Account::find(Auth::user()->account_id);
        return view('profile', compact('account'));
    }

    function updateprofile(Request $request){
        $rules = [
            'first_name' => 'required|string|max:25',
            'middle_name' => 'nullable|string|max:25',
            'last_name' => 'required|string|max:25',
            'email' => 'required|email|unique:accounts',
            'gender_id' => 'required',
            'role_id' => 'required',
            'password' => 'required|min:8|max:25|regex:/^(?=.*[0-9])(?=.*[a-zA-Z])\w{8,}$/',
            'image' => 'required|image',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $account = Account::find(Auth::user()->account_id);

        $account->role_id = $request->role_id;
        $account->gender_id = $request->gender_id;
        $account->first_name = $request->first_name;
        $account->middle_name = $request->middle_name;
        $account->last_name = $request->last_name;
        $account->email = $request->email;
        $account->password = Hash::make($request->password);

        $file = $request->file('image');
        if(isset($file)) {
            $fileName = time().$file->getClientOriginalName();
            Storage::delete('public/'.$account->display_picture_link);
            Storage::putFileAs('public/images', $file, $fileName);
            $account->display_picture_link = 'images/'.$fileName;
        }

        $account->modified_at = Carbon::today()->toDateString();
        $account->modified_by = Auth::user()->first_name;

        $account->save();

        return redirect('/saved');
    }

    public function accountmaintenance(){
        $accounts = Account::all();
        return view('accountmaintenance', compact('accounts'));
    }

    public function updaterole($id){
        $account = Account::find($id);
        return view('updaterole', compact('account'));
    }

    public function startupdaterole($id, Request $request){
        $account = Account::find($id);

        $account->role_id = $request->role_id;

        $account->modified_at = Carbon::today()->toDateString();
        $account->modified_by = Auth::user()->name;

        $account->save();

        return redirect('/accountmaintenance');
    }

    public function deleteaccount($id){
        $account = Account::find($id);
        $account->delete();
        return redirect('/accountmaintenance');
    }
}
