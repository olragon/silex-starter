<?php

namespace vendor_name\project_name;

use Silex\Application;
use vendor_name\project_name\traits\GetSetTrait;

class App extends Application
{

    use GetSetTrait;

    public function __construct(array $values = [])
    {
        parent::__construct($values + ['app.root' => dirname(__DIR__)]);
        $this->register(new ServiceProvider());
    }

}
