<?php
namespace Eddy\gusuarios;
use Illuminate\Support\ServiceProvider;


class GUsuariosServiceProvider extends ServiceProvider {
        public function boot()
        {
        	$this->loadRoutesFrom(__DIR__.'/routes/web.php');
        	 $this->loadViewsFrom(__DIR__.'/resources/views', 'gusuarios');
        	 $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        }
        public function register()
        {
           
        }
    }
?>  