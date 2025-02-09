<?php
namespace Include;

spl_autoload_register(function($className) {
    $path = __DIR__ . '/../classes/';
    $fullPath = $path . str_replace('\\', '/', $className) . '.class.php';
    
    if (file_exists($fullPath)) {
        require_once $fullPath;
    } else {
        throw new \Exception("Unable to load class: $className");
    }
});
