<?php

namespace App\Http\Middleware;

use Closure;

class SecurityHeaders
{
    private $unwantedHeaders = ['X-Powered-By', 'server', 'Server'];

    /**
     * @param $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!app()->environment('testing')) {
            $nonce = base64_encode(random_bytes(16)); // Generate a nonce for each request
            
            $cspHeader = "object-src 'none'; script-src 'self' *.cloudflare.com *.googleapis.com fonts.gstatic.com https://www.googletagmanager.com 'nonce-$nonce'  'strict-dynamic' 'unsafe-inline'; base-uri 'self';";
    
            // Pass the nonce to the view
            view()->share('nonce', $nonce);
    
            // Apply CSP header
            $response = $next($request);
            $response->headers->set('Content-Security-Policy', $cspHeader);
            $this->removeUnwantedHeaders($this->unwantedHeaders);
    
            return $response;
        }
    
        return $next($request);
    }
    

    /**
     * @param $headers
     */
    private function removeUnwantedHeaders($headers): void
    {
        foreach ($headers as $header) {
            header_remove($header);
        }
    }
 
}