# Image Size Finder
Extension to get image details with size, height,width and valid flag value by mininum/maxinum size given in configuration.

[![Latest Version](https://img.shields.io/packagist/v/nexuslinkservices/image-size-finder.svg?style=flat-square)](https://packagist.org/packages/nexuslinkservices/image-size-finder)
[![Software License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nexuslinkservices/image-size-finder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/image-size-finder/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/nexuslinkservices/image-size-finder/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/image-size-finder/build-status/master)

## Installation

If you use composer, you can add this package by running 

````
composer require nexuslinkservices/image-size-finder
````

## Usage

Set minimum and maximum value in bytes in configuration file. like this

```
image_size:
    minimum: 100
    maximum: 900
```

If you do not create configuration file it will from package.

```
<?php

use ImageSizeFinder\PictureParser;

$pictureParser = new PictureParser();
        
$images = ['https://raw.githubusercontent.com/nexuslinkservices/image-size-finder/master/web/samples/sample_image.png'];
$imageDetails = $pictureParser->fetchSize($images);
        
var_dump($imageDetails[0]);        
```

## Output

```
array = [
        "url"=> "https://raw.githubusercontent.com/nexuslinkservices/image-size-finder/master/web/samples/sample_image.png",
        "size"=> 82966,
        "height"=> 512,
        "width"=> 512,
        "valid"=> true 
    ];
```

## CONTRIBUTING:

Pull requests are always welcome.