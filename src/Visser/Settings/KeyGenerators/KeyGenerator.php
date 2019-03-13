<?php

namespace Visser\Settings\KeyGenerators;

use Visser\Settings\Context;
use Visser\Settings\Contracts\ContextSerializer;
use Visser\Settings\Contracts\KeyGenerator as KeyGeneratorContract;

class KeyGenerator implements KeyGeneratorContract
{
    /**
     * Context serializer.
     *
     * @var \Visser\Settings\Contracts\ContextSerializer
     */
    protected $serializer;

    /**
     * @param \Visser\Settings\Contracts\ContextSerializer $serializer
     */
    public function __construct(ContextSerializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * Generate storage key for a given key and context.
     *
     * @param string $key
     * @param \Visser\Settings\Context $context
     * @return string
     */
    public function generate($key, Context $context = null)
    {
        return md5($key.$this->serializer->serialize($context));
    }
}
