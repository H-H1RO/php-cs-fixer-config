<?php

declare(strict_types=1);

namespace H1r0\CS\Config;

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
     * {@inheritdoc}
     */
    public function setRules(array $rules)
    {
        return parent::setRules(array_merge(static::RULES, $rules));
    }

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }
}
