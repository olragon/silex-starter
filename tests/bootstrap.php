<?php

/** @var ClassLoader $loader */
use Composer\Autoload\ClassLoader;

define('APP_ROOT', dirname(__DIR__));

$loader = require_once APP_ROOT . '/vendor/autoload.php';
$loader->addPsr4('vendor_name\\project_name\\test_cases\\', __DIR__);
