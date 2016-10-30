<?php

namespace Form\Filter;

use Form\Filter;

class Md5 extends Filter
{
    /**
     * @param mixed $value
     * @return string
     */
    public function filter($value)
    {
        return md5($value);
    }
}
