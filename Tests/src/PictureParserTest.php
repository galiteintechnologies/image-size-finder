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
        
        $images = ['http://www.google.co.in/images/srpr/logo4w.png'];
        $actualResult = $pictureParser->getImageSize($images);
        
        $expectedResult = [ 
            ["url"]=> "http://www.google.co.in/images/srpr/logo4w.png",
            ["size"]=> 18946,
            ["height"]=> 190,
            ["width"]=> 550,
            ["valid"]=> true 
        ];
                
        $this->assertEquals($expectedResult, $actualResult);
    }
}
