<?php

namespace Visser\Settings\Contracts;

use Visser\Settings\Context;

interface KeyGenerator
{
    /**
     * Generate storage key for a given key and context.
     *
     * @param string $key
     * @param \Visser\Settings\Context $context
     * @return string
     */
    public function generate($key, Context $context = null);
}
