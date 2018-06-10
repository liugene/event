<?php

namespace linkphp\event\provider;

use linkphp\event\EventDefinition;
use linkphp\event\EventServerProvider;
use Db;
use framework\Exception;

class DatabaseProvider implements  EventServerProvider
{
    public function update(EventDefinition $definition)
    {
        if(file_exists(LOAD_PATH . 'database.php')) {
            Db::import(require LOAD_PATH . 'database.php');
        } else {
            throw new Exception('database config file not found');
        }
        return $definition;
        // TODO: Implement update() method.
    }
}
