<?php

namespace Fine\Filter;

class Callback extends FilterAbstract
{

    protected $_callback;

    public function setCallback($callback)
    {
        $this->_callback = $callback;
        return $this;
    }

    public function getCallback()
    {
        return $this->_callback;
    }

    public function filter($mInput)
    {
        return call_user_func($this->_callback, $mInput);
    }

}
