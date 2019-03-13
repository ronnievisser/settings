<?php

namespace Visser\Settings\ContextSerializers;

use Visser\Settings\Context;
use Visser\Settings\Contracts\ContextSerializer as ContextSerializerContract;

class ContextSerializer implements ContextSerializerContract
{
    /**
     * Serialize context into a string representation.
     *
     * @param \Visser\Settings\Context $context
     * @return string
     */
    public function serialize(Context $context = null)
    {
        return serialize($context);
    }
}
