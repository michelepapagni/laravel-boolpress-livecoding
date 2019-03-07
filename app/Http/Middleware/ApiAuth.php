<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->hasHeader('Authorization'))
        {
            return response()->json([
                'error' => 'Manca l\'author'
            ]);
        }

        $token = $request->header('Authorization');
        $projectToken = 'Bearer ' . config('project.authorization_key');

        if ($token != $projectToken)
        {
            return response()->json(['error' => 'Chiave non corretta']);
        }

        return $next($request);
    }
}
