<?php
if (version_compare(PHP_VERSION, '5.6.0') >= 0) {
    echo ' [OK] PHP version is newer than 5.6: '.phpversion();
} else {
    echo ' [ERROR] Your PHP version is too old for CKFinder 3.x.';
}
 
if (!function_exists('gd_info')) {
    echo ' [ERROR] GD extension is NOT enabled.';
} else {
    echo ' [OK] GD extension is enabled.';
}
 
if (!function_exists('finfo_file')) {
    echo ' [ERROR] Fileinfo extension is NOT enabled.';
} else {
    echo ' [OK] Fileinfo extension is enabled.';
}