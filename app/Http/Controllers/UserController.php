<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::whereNotNull('code')->get();
        return view('layouts.user.my-user', ['user' => $user]);
    }
    public function create()
    {
        return view('layouts.user.form.add-user');
    }
    public function store(Request $request)
    {
        $angka = rand(000000000, 999999999);
        $code = 'agt-' . $angka;
        // $cekKode = User::where('code', $code)->count();
        // if ($cekKode > 0) {
        //     $angka = rand(000000000, 999999999);
        //     $code = 'agt-' . $angka;            
        // } else {
        User::create([
            'code' => $code,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('1'),
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
        ]);
        // }
        return redirect('user');
    }
    public function update(Request $request, $id)
    {
        User::where('id', $id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,            
            'gender' => $request->gender,
            'date_birth' => $request->date_birth,            
            'place_birth' => $request->place_birth,            
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect()->back()->with('success', 'Update successfully');
    }
}
