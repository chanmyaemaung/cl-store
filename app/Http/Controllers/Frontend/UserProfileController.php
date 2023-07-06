<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('frontend.dashboard.profile');
    } // End of index

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::user()->id],
            'image' => ['image', 'mimes:jpg,jpeg,png,gif,svg', 'max:2048']
        ]);

        $user = Auth::user();

        if ($request->hasFile('image')) {
            if (File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }

            $image = $request->image;
            $imageName = rand() . '_' . 'user_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            $imagePath = "/uploads/" . $imageName;
            $user->image = $imagePath;
        }

        $user->name = $request->name;
        $user->username = $request->username ?? null;
        $user->email = $request->email;
        $user->phone = $request->phone ?? null;
        $user->save();

        toastr()->success('User Profile updated successfully!');
        return redirect()->back();
    } // End of updateProfile

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8']
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);

        toastr()->success('User Password updated successfully!');
        return redirect()->back();
    } // End of updatePassword
}
