<?php

namespace Fine\Filter;

class StringTrim extends FilterAbstract
{

    public function filter($string)
    {
        return trim($string);
    }
    
}
