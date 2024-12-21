<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visits;
use GeoIp2\Database\Reader;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        // Get the visitor's IP address
        $ip = $request->ip();

        // Initialize GeoIP reader
        $reader = new Reader(storage_path('app/GeoLite2-Country.mmdb')); // You must download the GeoLite2 database
        try {
            $record = $reader->country($ip);
            $country = $record->country->name;
        } catch (\GeoIp2\Exception\AddressNotFoundException $e) {
            $country = 'Unknown';
        }

        // Store visitor data
        Visits::create([
            'ip_address' => $ip,
            'country' => $country,
        ]);

        return $next($request);
    }
}
