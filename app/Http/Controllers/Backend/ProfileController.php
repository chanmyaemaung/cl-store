<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    } // End of index

    function updateProfile(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::id()],
            'image' => ['image', 'max:2048']
        ]);

        $user = Auth::user();

        // Upload new image and update user
        if ($request->hasFile('image')) {
            // Delete old image
            if (File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }

            $image = $request->image;
            $imageName = rand() . '_' . 'admin_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            $imagePath = "/uploads/" . $imageName;

            $user->image = $imagePath;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        toastr()->success('Admin Profile updated successfully!');

        return redirect()->back();
    } // End of updateProfile

    function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8']
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);

        toastr()->success('Password updated successfully!');

        return redirect()->back();
    } // End of updatePassword
}
