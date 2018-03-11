<?php

namespace linkphp\event;

interface EventServerProvider
{
    public function update(EventDefinition $eventDefinition);
}
