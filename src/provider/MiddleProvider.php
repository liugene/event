<?php

namespace linkphp\event\provider;

use linkphp\event\EventDefinition;
use linkphp\event\EventServerProvider;
use framework\Exception;
use framework\Application;

class MiddleProvider implements  EventServerProvider
{
    public function update(EventDefinition $definition)
    {
        Application::get('linkphp\middleware\Middleware')
            ->import(include LOAD_PATH . 'middleware.php')
            ->beginMiddleware();
        return $definition;
        // TODO: Implement update() method.
    }
}
