<?php

declare(strict_types=1);

namespace Joolen\CS\Finder;

class Laravel5Finder extends Finder
{
    /**
     * Config for Laravel。
     */
    public function __construct()
    {
        parent::__construct();
        $this
            ->notPath('config')
            ->notPath('resources')
            ->notPath('bootstrap/cache')
            ->notPath('storage')
            ->notName('*.blade.php')
            ->notName('_ide_helper.php');
    }
}
