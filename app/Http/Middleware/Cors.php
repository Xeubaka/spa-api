<?php
namespace App\Http\Middleware;

use Closure;

class Authenticate
{
  public function handle($request, Closure $next)
  {

      return $next($request)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Origin', 'GET, POST, PUT, DELETE')
      ;
  }
}
?>
