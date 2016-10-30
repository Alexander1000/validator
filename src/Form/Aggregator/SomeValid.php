<?php

namespace Form\Aggregator;

use Form\Aggregator;

class SomeValid extends Aggregator
{
    /**
     * @return bool
     */
    protected function aggregate(): bool
    {
        return in_array(true, $this->maskValid, true);
    }
}
