<?php

namespace App\Services;

use App\Repositories\BrandRepository;

/**
 *
 */
class BaseService
{
    public function convertBase64ToImage($img)
    {
        $folderPath = "images/";
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . uniqid() . '.png';
        file_put_contents($file, $image_base64);
        return $file;
    }
}
