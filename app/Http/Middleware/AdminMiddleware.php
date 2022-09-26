<?php 
namespace App\Http\Middleware;
use Closure;
class AdminMiddleware
{
    /**
     * Handle an incoming request. User must be logged in to do admin check
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::check() && \Auth::user()->user_type=="admin")
        {
            return $next($request);
        }else if(\Auth::check() && \Auth::user()->user_type=="carer"){
             return $next($request);
        } 
        return redirect()->guest('/');
    }
}