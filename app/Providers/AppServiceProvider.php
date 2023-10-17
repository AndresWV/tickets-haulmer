<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Response::macro('success', function ($data, $message = 'OK', $code = 200) {
            return response()->json([
                'message' => $message,
                'code' => $code,
                'data' => $data,
            ], $code);
        });

        Response::macro('error', function ($message = 'Internal Server Error', $code = 500, $data = []) {
            return response()->json([
                'message' => $message,
                'code' => $code,
                'data' => $data,
            ], $code);
        });
    }
}
