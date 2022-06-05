<?php
// To start with, lets display any errors.
// You can later comment these out
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'webp-on-demand-1.inc';

use WebPConvert\WebPConvert;

$source = $_GET['source'];            // Absolute file path to source file. Comes from the .htaccess
$destination = $source . '.webp';     // Store the converted images besides the original images (other options are available!)

$options = [

    // Tell where to find the webp-convert-and-serve library, which will
    // be dynamically loaded, if need be.
    'require-for-conversion' => 'webp-on-demand-2.inc',

    // UNCOMMENT NEXT LINE, WHEN YOU ARE UP AND RUNNING!
    'show-report' => true             // Show a conversion report instead of serving the converted image.

    // More options available!
];
WebPConvert::convertAndServe($source, $destination, $options);
