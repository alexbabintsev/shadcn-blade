<?php

namespace AlexBabintsev\ShadcnBlade\Commands;

use Illuminate\Console\Command;

class ShadcnBladeCommand extends Command
{
    public $signature = 'shadcn-blade:install';

    public $description = 'Install and setup ShadCN Blade components';

    public function handle(): int
    {
        $this->info('Installing ShadCN Blade components...');

        // Publish assets
        $this->call('vendor:publish', [
            '--tag' => 'shadcn-blade-assets',
            '--force' => true,
        ]);

        // Publish views
        $this->call('vendor:publish', [
            '--tag' => 'shadcn-blade-views',
            '--force' => true,
        ]);

        $this->info('✅ ShadCN Blade components installed successfully!');
        $this->line('');
        $this->line('Next steps:');
        $this->line('1. Add the CSS to your layout: <link href="{{ asset(\'css/shadcn-blade.css\') }}" rel="stylesheet">');
        $this->line('2. Make sure Tailwind CSS is configured with the package views');
        $this->line('3. Start using components: <x-shadcn::button>Click me</x-shadcn::button>');
        $this->line('');
        $this->line('Check out the examples at resources/views/examples/button-examples.blade.php');

        return self::SUCCESS;
    }
}
