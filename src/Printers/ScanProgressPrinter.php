<?php

namespace Permafrost\RayScan\Printers;

use Permafrost\RayScan\Configuration\Configuration;
use Symfony\Component\Console\Output\OutputInterface;

class ScanProgressPrinter
{
    /** @var \Symfony\Component\Console\Output\OutputInterface */
    protected $output;

    /** @var \Permafrost\RayScan\Configuration\Configuration */
    protected $config;

    public function __construct(OutputInterface $output, Configuration $config)
    {
        $this->output = $output;
        $this->config = $config;
    }

    public function print(string $filename, bool $hasResults): void
    {
        $prefix = $hasResults ? '<fg=red;options=bold>✗' : '<fg=green>✔';

        $this->output->writeln("   $prefix</> $filename");
    }
}
