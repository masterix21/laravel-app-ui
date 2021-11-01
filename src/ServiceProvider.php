<?php

namespace Masterix21\AppUI;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('app-ui')
            ->hasConfigFile()
            ->hasViews();
    }
}
