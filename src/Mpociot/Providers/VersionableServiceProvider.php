<?php
/**
 * Created by PhpStorm.
 * User: mkruege
 * Date: 08.12.17
 * Time: 10:52
 */

namespace Mpociot\Versionable;


use Illuminate\Support\ServiceProvider;

/**
 * Class VersionableServiceProvider
 *
 * @package Mpociot\Versionable
 */
class VersionableServiceProvider extends ServiceProvider
{
    /**
     * Load migrations
     */
    public function boot()
    {
        $migrations = realpath(__DIR__ . '/../../migrations');
        $this->loadMigrationsFrom($migrations);
    }

    /**
     *
     */
    public function register()
    {
        // Nothing to do here, i guess
    }

}
