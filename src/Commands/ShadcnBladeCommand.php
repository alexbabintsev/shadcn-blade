<?php

namespace AlexBabintsev\ShadcnBlade\Commands;

use Illuminate\Console\Command;

class ShadcnBladeCommand extends Command
{
    public $signature = 'shadcn-blade';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
