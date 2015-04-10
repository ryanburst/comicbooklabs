<?php namespace Burst\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		// Update public path from /public to /www
		$this->app->bind('path.public', function() {
      return base_path().'/www';
    });
	}

}
