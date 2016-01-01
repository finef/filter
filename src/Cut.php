<?php

namespace Fine\Filter;

class Cut extends FilterAbstract
{

    protected $_length = 255;
    protected $_end    = '…'; // Unicode Character 'HORIZONTAL ELLIPSIS' (U+2026)

    public function setLength($length)
    {
        $this->_length = $length;
        return $this;
    }

    public function getLength()
    {
        return $this->_length;
    }

    public function setEnd($end)
    {
        $this->_end = $end;
        return $this;
    }

    public function getEnd()
    {
        return $this->_end;
    }

    public function filter($string)
    {
        if (isset($string[$this->_length - 1])) {
                return mb_substr($string, 0 , $this->_length, 'UTF-8') . $this->_end;
        }
        return $string;
    }

}
