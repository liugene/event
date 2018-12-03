<?php

namespace linkphp\event\provider;

use linkphp\event\EventDefinition;
use linkphp\event\EventServerProvider;

class EnvProvider implements  EventServerProvider
{
    public function update(EventDefinition $definition)
    {

        $envFile = ROOT_PATH . '.env';

        if(file_exists($envFile)){
            $env = parse_ini_file($envFile, true);

            foreach ($env as $key => $val) {
                $name = ENV_PREFIX . strtoupper($key);

                if (is_array($val)) {
                    foreach ($val as $k => $v) {
                        $item = $name . '_' . strtoupper($k);
                        putenv("$item=$v");
                    }
                } else {
                    putenv("$name=$val");
                    //加入这一句
                    $_ENV[$name]=$val;
                }
            }
        }

        return $definition;
        // TODO: Implement update() method.
    }
}
