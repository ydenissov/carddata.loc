<?php

namespace App\Http\Middleware;

use App\Logger;
use Closure;

class ApiDataLogger
{
    private $startTime;

    public function handle($request, Closure $next)
    {
        $this->startTime = microtime(true);
        return $next($request);
    }

    public function terminate($request, $response)
    {
        if ( env('API_DATALOGGER', true) ) {

            $endTime = microtime(true);
            $dataToLog['duration'] = number_format($endTime - LUMEN_START, 3);
            $dataToLog['ip_addr'] = $request->ip();
            $dataToLog['url'] = $request->fullUrl();
            $dataToLog['method'] = $request->method();
            $dataToLog['input'] = $request->getContent();
            $dataToLog['output'] = $response->getContent();

            Logger::create($dataToLog);

        }
    }
}
