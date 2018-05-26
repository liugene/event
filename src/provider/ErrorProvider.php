<?php

namespace linkphp\event\provider;

use linkphp\event\EventDefinition;
use linkphp\event\EventServerProvider;
use linkphp\error\Error;

class ErrorProvider implements  EventServerProvider
{
    public function update(EventDefinition $definition)
    {
        IS_CLI ? //注册错误和异常处理机制
            Error::register(
                Error::instance()
                    ->setErrorView(EXTRA_PATH . 'tpl/error.html')
                    ->setDebug(true)
                    ->setErrHandle('console')
            )->complete()
        :
        //注册错误和异常处理机制
        Error::register(
            Error::instance()
                ->setErrorView(EXTRA_PATH . 'tpl/error.html')
                ->setDebug(true)
                ->setErrHandle('view')
        )->complete();
        return $definition;
        // TODO: Implement update() method.
    }
}
