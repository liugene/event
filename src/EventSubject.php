<?php

namespace linkphp\event;

interface EventSubject
{

    public function provider(EventDefinition $eventDefinition);
    public function remove($server);
    public function target($server);

}
