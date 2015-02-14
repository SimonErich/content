<?php namespace Dukoapp\Content;

use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{


			// routes
			 include __DIR__.'/../../routes.php';

			// views
			 $this->loadViewsFrom(__DIR__.'/../../../resources/views', 'content');
			 $this->publishes([
				   __DIR__.'/../../../resources/views' => base_path('resources/views/dukoapp/content'),
				]);

			// lang
			 $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'content');

			// confi
			$this->publishes([
					__DIR__.'/../../../config/content.php' => config_path('content.php'),
			]);


	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		

		/*/ Register 'underlyingclass' instance container to our UnderlyingClass object
         $this->app['content'] = $this->app->share(function($app)
          {
             return new Duko\Content\Models\Page;
          });*/


	} // END function register

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
