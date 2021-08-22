<?php

namespace Spatie\XRay\Printers;

use Permafrost\PhpCodeSearch\Results\SearchResult;
use Spatie\XRay\Configuration\Configuration;
use Symfony\Component\Console\Output\OutputInterface;

abstract class ResultPrinter
{
    /** @var Configuration */
    protected $config;

    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }

    abstract public function print(OutputInterface $output, SearchResult $result): void;
}
