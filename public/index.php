<?php

use vendor_name\project_name\App;

require_once __DIR__ . '/../vendor/autoload.php';
(new App(require dirname(__DIR__) . '/config.php'))->run();
