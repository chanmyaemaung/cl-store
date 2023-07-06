<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;

class VendorProfileController extends Controller
{
    public function index()
    {
        return view('vendor.dashboard.profile');
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
            $imageName = rand() . '_' . 'vendor_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            $imagePath = "/uploads/" . $imageName;

            $user->image = $imagePath;
        }

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        toastr()->success('Vendor Profile updated successfully!');

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

        toastr()->success('Vendor Password updated successfully!');

        return redirect()->back();
    } // End of updatePassword
}
