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
            $response->headers->set('Referrer-Policy', 'no-referrer-when-downgrade');
            $response->headers->set('X-XSS-Protection', '1; mode=block');
            $response->headers->set('Expect-CT', 'enforce, max-age=30');
            $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
            $response->headers->set('Permissions-Policy', 'autoplay=(self), camera=(), encrypted-media=(self), fullscreen=(), geolocation=(self), gyroscope=(self), magnetometer=(), microphone=(), midi=(), payment=(), sync-xhr=(self), usb=()');
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Methods', 'GET,POST,PUT,PATCH,DELETE,OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type,Authorization,X-Requested-With,X-CSRF-Token');
            
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