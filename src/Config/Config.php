<?php

declare(strict_types=1);

namespace Joolen\CS\Config;

class Config extends \PhpCsFixer\Config
{
    /**
     * Whether to allow risky rules.
     *
     * @var bool
     */
    public const RISKEY_ALLOWED = false;

    /**
     * Rule list.
     *
     * @var array
     */
    public const RULES = [];

    /**
     * @param string $name config name
     */
    public function __construct(string $name = 'default')
    {
        parent::__construct($name);
        $this
            ->setRiskyAllowed(static::RISKEY_ALLOWED)
            ->setRules(static::RULES);
    }

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }
}
