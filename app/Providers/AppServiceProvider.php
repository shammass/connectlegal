<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use JulioMotol\AuthTimeout\Middleware\AuthTimeoutMiddleware;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
    require_once __DIR__.'/../helpers.php';
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    AuthTimeoutMiddleware::setRedirectTo(function ($request, $guard){
      switch($guard){
          case 'web.admin':
              return route('auth.admin.login');
          default:
              return route('home');
      }
    });

    Blade::directive('size', function ($expression) {
      $data = formatBytes($expression);
      return $data;
    });

    Paginator::useBootstrapFive();
  }
}
