<?php

namespace AlexBabintsev\ShadcnBlade;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AlexBabintsev\ShadcnBlade\Commands\ShadcnBladeCommand;

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
            ->hasMigration('create_shadcn_blade_table')
            ->hasCommand(ShadcnBladeCommand::class);
    }
}
