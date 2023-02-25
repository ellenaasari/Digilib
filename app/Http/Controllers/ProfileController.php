<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function getProfile()
    {
        $user = Auth::user();
        return view('layouts.profile.my-profile', ['user' => $user]);
    }
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->about = $request->about;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->date_birth = $request->date_birth;
        $user->place_birth = $request->place_birth;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->photo_profile_path == null) {
            $user->save();
        } else {
            $namaGambar = $request->name . ".jpeg";
            if ($user->photo_profile_path == null) {
                $request->photo_profile_path->move(base_path('public/storage/profile'), $namaGambar);
                $user->photo_profile_path = $namaGambar;
                $user->save();
            } else {
                File::delete('storage/profile/' . $user->photo_profile_path);
                $request->photo_profile_path->move(base_path('public/storage/profile'), $namaGambar);
                $user->photo_profile_path = $namaGambar;
                $user->save();
            }
        }

        return redirect()->back()->with('success', 'Update successfully');
    }
    public function deleteProfile()
    {
        $user = Auth::user();
        File::delete('storage/profile/' . $user->photo_profile_path);
        $user->photo_profile_path = '';
        $user->save();
        return redirect()->back()->with('message', 'Delete successfully');
    }
}
