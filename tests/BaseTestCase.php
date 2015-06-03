<?php

namespace vendor_name\project_name\test_cases;

use vendor_name\project_name\App;

abstract class BaseTestCase extends \PHPUnit_Framework_TestCase
{

    public function getConfiguration()
    {
        return ['debug' => true] + require APP_ROOT . '/config.default.php';
    }

    public function getApplication()
    {
        return new App($this->getConfiguration());
    }

}
