<?php

namespace linkphp\event\provider;

use linkphp\event\EventDefinition;
use linkphp\event\EventServerProvider;
use Config;

class ConfigProvider implements  EventServerProvider
{
    public function update(EventDefinition $definition)
    {
        Config::setLoadPath(LOAD_PATH)->complete();
        return $definition;
        // TODO: Implement update() method.
    }
}
