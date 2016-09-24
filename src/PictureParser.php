<?php

/*
 * This file is part of the Image Size Finder
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ImageSizeFinder;

use Symfony\Component\Yaml\Yaml;
use ImageSizeFinder\src\Services\ImageUtility;

class PictureParser {

    private $pathToYml;

    public function __construct($pathToYml = '') {

        if (!empty($pathToYml)) {
            $this->pathToYml = $pathToYml;
        } else {
            $this->pathToYml = __DIR__."/../Resources/config/config.yml";
        }
    }

    /**
     * @param array $images
     * 
     * @return array
     */
    public function fetchSize($images) {
        
        if(empty($images))
        {
            return [];
        }
        
        $configArray = Yaml::parse(file_get_contents($this->pathToYml));
        $minSize = $configArray['image_size']['minimum'];
        $maxSize = $configArray['image_size']['maximum'];
        
        $imageList = array();
        
        foreach($images as $key => $image) {
            $imageList[$key]['url'] = $image;
            $imageList[$key]['size'] = ImageUtility::getSize($image);
            
            list($width, $height) = getimagesize($image);
            $imageList[$key]['height'] = $height;
            $imageList[$key]['width']  = $width;
            
            $imageList[$key]['valid'] = true;
            
            if($imageList[$key]['size'] < $minSize || $imageList[$key]['size'] > $maxSize)
            {
                $imageList[$key]['valid'] = false;
            }
        }
        
        return $imageList;
    }
    
}
