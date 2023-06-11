<?php

namespace App\Http;

use File;

class Helpers
{

    public static function uploadFileOnPublic($file, $filePath = "img/uploads", $prefix = "_file")
    {

        if (empty($file)) return "";
        $filename = $prefix . "." . $file->getClientOriginalExtension();

        // if (!File::exists($filePath))
        // mkdir($filePath, 0777, true);
        $file->move(public_path($filePath), $filename);
        return $filename;
    }

    public static function deleteFile($file)
    {
        if (File::exists(public_path($file))) {
            File::delete(public_path($file));
            return true;
        }
        return false;
    }
}
