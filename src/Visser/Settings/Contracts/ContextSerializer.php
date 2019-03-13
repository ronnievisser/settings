<?php

namespace Visser\Settings\Contracts;

use Visser\Settings\Context;

interface ContextSerializer
{
    /**
     * Serialize context into a string representation.
     *
     * @param \Visser\Settings\Context $context
     * @return string
     */
    public function serialize(Context $context = null);
}
