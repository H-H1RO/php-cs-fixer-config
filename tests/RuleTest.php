<?php

declare(strict_types=1);

use H1r0\CS\Config\Rule;
use PHPUnit\Framework\TestCase;

class RuleTest extends TestCase
{
    public function testCreate()
    {
        $rule = Rule::create();
        $this->assertInstanceOf('\H1r0\CS\Config\Rule', $rule);
    }

    public function testOverwriteRules(Type $var = null)
    {
        $rule = Rule::create();
        $defaultRules = $rule->getRules();
        $overwritedRules = $rule->setRules(['combine_consecutive_unsets' => false])->getRules();

        $this->assertIsArray($defaultRules);
        $this->assertTrue($defaultRules['combine_consecutive_unsets']);
        $this->assertFalse($overwritedRules['combine_consecutive_unsets']);
    }
}
