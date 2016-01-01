<?php

namespace Fine\Filter;

abstract class FilterAbstract implements FilterInterface
{

    public function __construct(array $config = array())
    {
        foreach ($config as $method => $arg) {
            $this->{$method}($arg);
        }
    }

}
