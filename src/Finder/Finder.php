<?php

declare(strict_types=1);

namespace Joolen\CS\Finder;

class Finder extends \PhpCsFixer\Finder
{
    /**
     * Set the directory to be scanned at the same time as create.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function __construct()
    {
        parent::__construct();
        $this
            ->notPath('vendor')
            ->name('*.php')
            ->ignoreDotFiles(true)
            ->ignoreVCS(true);
    }
}
