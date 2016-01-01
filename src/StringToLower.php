<?php

namespace Fine\Filter;

class StringToLower extends FilterAbstract
{

    public function filter($string)
    {
		return strtolower($string);
    }

}
