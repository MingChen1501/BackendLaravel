<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LoggingRequestAndResponse
{

    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        Log::info('request', [
            'method' => $request->method(),
            'url' => $request->fullUrl(),
        ]);
        Log::info('response', [
            'status' => $response->getStatusCode(),
            'size' => strlen($response->getContent())
        ]);
        return $response;

    }
}
