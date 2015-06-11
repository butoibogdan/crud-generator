<?php namespace Butoibogdan\CrudGenerator;

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
        	        'Butoibogdan\CrudGenerator\CrudCommand',
			'Butoibogdan\CrudGenerator\CrudControllerCommand',
			'Butoibogdan\CrudGenerator\CrudModelCommand',
			'Butoibogdan\CrudGenerator\CrudMigrationCommand',
			'Butoibogdan\CrudGenerator\CrudViewCommand'
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
