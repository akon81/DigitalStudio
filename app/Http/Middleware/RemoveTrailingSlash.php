<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RemoveTrailingSlash
{
    /**
     * Handle an incoming request.
     *
     * Redirects URLs with trailing slashes to their non-trailing slash equivalent,
     * except for the root path ("/").
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->getPathInfo();

        // If path ends with slash and is not root, redirect to non-slash version
        if ($path !== '/' && str_ends_with($path, '/')) {
            $newPath = rtrim($path, '/');
            $query = $request->getQueryString();
            $url = $newPath.($query ? '?'.$query : '');

            return redirect($url, 301);
        }

        return $next($request);
    }
}
