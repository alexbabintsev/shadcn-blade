<?php

namespace AlexBabintsev\ShadcnBlade;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AlexBabintsev\ShadcnBlade\Commands\ShadcnBladeCommand;
use Illuminate\Support\Facades\Blade;

class ShadcnBladeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('shadcn-blade')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(ShadcnBladeCommand::class);
    }

    public function bootingPackage(): void
    {
        $this->registerBladeComponents();
        $this->publishAssets();
    }

    protected function registerBladeComponents(): void
    {
        // Register anonymous components
        Blade::anonymousComponentNamespace('shadcn-blade::components', 'shadcn');
    }

    protected function publishAssets(): void
    {
        // Publish CSS files
        $this->publishes([
            __DIR__.'/../resources/css' => public_path('css'),
        ], 'shadcn-blade-assets');

        // Publish Tailwind config
        $this->publishes([
            __DIR__.'/../tailwind.config.js' => base_path('tailwind.config.js'),
        ], 'shadcn-blade-config');
    }
}
