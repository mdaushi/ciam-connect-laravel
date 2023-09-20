<?php

namespace Mdaushi\CiamConnectLaravel\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mdaushi\CiamConnectLaravel\CiamConnectLaravelServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Mdaushi\\CiamConnectLaravel\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            CiamConnectLaravelServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_ciam-connect-laravel_table.php.stub';
        $migration->up();
        */
    }
}
