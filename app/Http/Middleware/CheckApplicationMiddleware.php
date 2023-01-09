<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckApplicationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $var = null;
        try {
            DB::connection()->getPDO();
        }catch (\Throwable $e)
        {
            $var = $e->getMessage() ?? null;
        }
        if(is_null($var))
        {
            return $next($request);
        }else{
            return redirect()->route('goToInstaller');
        }


    }
}
