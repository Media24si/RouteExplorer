<?php

namespace Media24si\RouteExplorer;

use Illuminate\Support\ServiceProvider;

class RouteExplorerServiceProvider extends ServiceProvider  {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		include __DIR__ . '/app/Http/routes.php';
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerViews();
	}

	/**
	 * Register package views
	 */
	private function registerViews() {
		$this->loadViewsFrom(__DIR__ . '/resources/views/', 'RouteExplorer');
	}
}