<?php

namespace ImageSizeFinder\src\Services;

class ImageUtility {

    /**
     * 
     * @param string $image
     * 
     * @return string
     */
    private static function getSize($image)
    {   
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $image);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLOPT_NOBODY, TRUE);

        curl_exec($ch);
        $size = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
        curl_close($ch);
        
        return $size;
    }
}
