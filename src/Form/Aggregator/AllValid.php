<?php

namespace Form\Aggregator;

use Form\Aggregator;

class AllValid extends Aggregator
{
    /**
     * @return bool
     */
    protected function aggregate(): bool
    {
        return !in_array(false, $this->maskValid, true);
    }
}
