<?php

namespace WouterComello\FilamentDocumentation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use WouterComello\FilamentDocumentation\Commands\FilamentDocumentationCommand;

class FilamentDocumentationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-documentation')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-documentation_table')
            ->hasCommand(FilamentDocumentationCommand::class);
    }
}
