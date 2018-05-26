<?php

namespace linkphp\event\provider;

use linkphp\event\EventDefinition;
use linkphp\event\EventServerProvider;
use linkphp\boot\Exception;
use Config;

class ConfigProvider implements  EventServerProvider
{
    public function update(EventDefinition $definition)
    {
        Config::setLoadPath(LOAD_PATH)->import(require FRAMEWORK_PATH . 'configure.php');
        return $definition;
        // TODO: Implement update() method.
    }
}
