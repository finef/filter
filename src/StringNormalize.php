<?php

namespace Fine\Filter;

class StringNormalize extends FilterAbstract
{

    protected $_space = '-';
    protected $_allow = 'a-zA-Z0-9.()';

    public function setSpace($space)
    {
        $this->_space = $space;
        return $this;
    }

    public function getSpace()
    {
        return $this->_space;
    }

    public function setAllow($space)
    {
        $this->_space = $space;
        return $this;
    }

    public function getAllow()
    {
        return $this->_space;
    }

    public function filter($string)
    {
        // remove all unallowed characters
        $string = preg_replace('#[^' . preg_quote($this->_allow . $this->_space, '#') . '\s]+#', '', $string);

        // many space next to each other replace to one space
        if (isset($this->_space)) {
            $string = preg_replace('#[' . preg_quote($this->_space, '#') . '\s]+#', $this->_space, $string);
        }

        return $string;
    }

}
