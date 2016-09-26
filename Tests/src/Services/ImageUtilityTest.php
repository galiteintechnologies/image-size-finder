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
        $actualResult = ImageUtility::getSize("https://raw.githubusercontent.com/nexuslinkservices/image-size-finder/master/web/samples/sample_image.png");
                
        $this->assertEquals(82966, $actualResult);
    }

}
