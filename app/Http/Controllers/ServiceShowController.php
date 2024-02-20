<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        return view('services.show', compact('service'));
    }
}
