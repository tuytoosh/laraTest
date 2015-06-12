<?php namespace Tuytoosh\LaraTest;
use Illuminate\Support\ServiceProvider;
class LaraTestServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
	dd("working");
	}
	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
	
	}
}
