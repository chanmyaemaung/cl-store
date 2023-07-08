<?php

namespace App\Traits;

use Illuminate\Http\Request;


/**
 * Trait for image upload functionality.
 *
 * This trait provides a method for uploading an image based on the given input name,
 * path, and prefix folder name.
 */
trait ImageUploadTrait
{

    /**
     * Uploads an image.
     *
     * @param \Illuminate\Http\Request $request The HTTP request object.
     * @param string $inputName The name of the input field that contains the image file.
     * @param string $path The path to where the image will be stored.
     * @param string $prefixFolderName The prefix to be added to the folder name of the uploaded image like "slider_".
     * @return string The path to the uploaded image.
     */
    public function uploadImage(Request $request, $inputName, $path, $prefixFolderName): string
    {
        if ($request->hasFile($inputName)) {
            $image = $request->{$inputName};

            $extension = $image->getClientOriginalExtension();

            $imageName = $prefixFolderName . '_' . uniqid() . '.' . $extension;
            $image->move(public_path($path), $imageName);

            $imagePath = $path . '/' . $imageName;

            return $imagePath;
        }
    } // End of uploadImage
}
