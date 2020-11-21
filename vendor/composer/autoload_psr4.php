<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'mindplay\\middleman\\' => array($vendorDir . '/mindplay/middleman/src'),
    'StudentsApp\\' => array($baseDir . '/src'),
    'Psr\\Http\\Server\\' => array($vendorDir . '/psr/http-server-handler/src', $vendorDir . '/psr/http-server-middleware/src'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-factory/src', $vendorDir . '/psr/http-message/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'Laminas\\ZendFrameworkBridge\\' => array($vendorDir . '/laminas/laminas-zendframework-bridge/src'),
    'Laminas\\Diactoros\\' => array($vendorDir . '/laminas/laminas-diactoros/src'),
    'Invoker\\' => array($vendorDir . '/php-di/invoker/src'),
    'Interop\\Http\\Server\\' => array($vendorDir . '/http-interop/http-server-middleware/src'),
);
