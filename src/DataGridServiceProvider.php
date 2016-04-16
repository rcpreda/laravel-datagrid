<?php
/**
 * Created by PhpStorm.
 * User: razvanp
 * Date: 16/04/2016
 * Time: 05:22
 */

namespace Pulserender\DataGrid;

use Illuminate\Support\ServiceProvider;

class DataGridServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        dd('ini');
    }

    public function boot() {
        dd('boot');
    }
}