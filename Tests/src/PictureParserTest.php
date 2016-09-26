<?php

namespace ImageSizeFinder\Tests;

use ImageSizeFinder\PictureParser;

class PictureParserTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function fetchSizeTest()
    {
        $pictureParser = new PictureParser();
        
        $images = ['https://raw.githubusercontent.com/nexuslinkservices/image-size-finder/master/web/samples/sample_image.png'];
        $actualResult = $pictureParser->fetchSize($images);
        
        $expectedResult = arrray(0) = [
            "url"=> "https://raw.githubusercontent.com/nexuslinkservices/image-size-finder/master/web/samples/sample_image.png",
            "size"=> 82966,
            "height"=> 512,
            "width"=> 512,
            "valid"=> true 
        ];
                
        $this->assertEquals($expectedResult, $actualResult);
    }
}
