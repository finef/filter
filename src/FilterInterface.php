<?php

namespace Fine\Filter;

interface FilterInterface
{

    /**
     * @see filter()
     */
    public function __invoke($mValue);

    /**
     * Filter value
     *
     * @return mixed Filtred value
     */
    public function filter($mValue);

}
