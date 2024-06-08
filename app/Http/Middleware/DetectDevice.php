<?php

namespace App\Http\Middleware;

use Closure;
use Detection\Exception\MobileDetectException;
use Detection\MobileDetect;
use Illuminate\Http\Request;

class DetectDevice
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure $next
     * @return mixed
     * @throws MobileDetectException
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $detect = new MobileDetect;
        if ($detect->isMobile() || $detect->isTablet()) {
            $request->merge(['is_mobile' => true]);
        } else {
            $request->merge(['is_mobile' => false]);
        }

        return $next($request);
    }
}
