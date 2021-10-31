<?php

namespace Masterix21\AppUI;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Masterix21\AppUI\Commands\AppUICommand;

class AppUIServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('appui')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_appui_table')
            ->hasCommand(AppUICommand::class);
    }
}
