<?php namespace Customappzcoder\CrudGenerator;

use Illuminate\Support\ServiceProvider;

class CrudGeneratorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->commands(
        	'Customappzcoder\CrudGenerator\CrudCommand',
			'Customappzcoder\CrudGenerator\CrudControllerCommand',
			'Customappzcoder\CrudGenerator\CrudModelCommand',
			'Customappzcoder\CrudGenerator\CrudMigrationCommand',
			'Customappzcoder\CrudGenerator\CrudViewCommand'
        );
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
