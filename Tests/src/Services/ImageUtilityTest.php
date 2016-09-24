<?php

namespace ImageSizeFinder\Tests\src\Services;

use ImageSizeFinder\src\Services\ImageUtility;

class ImageUtilityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function getSizeTest() 
    {
        $actualResult = ImageUtility::getSize("http://www.google.co.in/images/srpr/logo4w.png");
                
        $this->assertEquals(18946, $actualResult);
    }

}
