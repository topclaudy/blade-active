<?php namespace Awobaz\BladeActive;

use Illuminate\Support\Facades\Blade;
use Watson\Active\ActiveServiceProvider as BaseActiveServiceProvider;

class BladeActiveServiceProvider extends BaseActiveServiceProvider
{

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
	    parent::boot();

        Blade::directive('active', function ($expression) {
            $arguments = explode(',', $expression);

            $routes = $arguments[0];

            if(count($arguments) == 2){
                list($routes, $class) = $arguments;

                return "<?php echo active($routes, $class); ?>";
            }

            return "<?php echo active($routes); ?>";
        });

        Blade::if('isactive', function ($routes) {
            return is_active($routes);
        });
    }
}
