<?php

namespace Mdaushi\CiamConnectLaravel;

use Mdaushi\CiamConnectLaravel\Commands\CiamConnectLaravelCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CiamConnectLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ciam-connect-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ciam-connect-laravel_table')
            ->hasCommand(CiamConnectLaravelCommand::class);
    }
}
