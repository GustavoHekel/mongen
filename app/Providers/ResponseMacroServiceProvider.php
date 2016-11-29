<?php

namespace App\Providers;

use Response;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('success', function ($value) {
            return Response::json($value, 200);
        });

        Response::macro('created', function ($value) {
            return Response::json($value, 201);
        });

        Response::macro('error', function ($value) {
            return Response::json($value, 400);
        });

        Response::macro('unauthorized', function ($value) {
            return Response::json($value, 401);
        });

        Response::macro('notFound', function ($value) {
            return Response::json($value, 404);
        });

        Response::macro('unprocessable', function ($value) {
            return Response::json($value, 422);
        });

        Response::macro('internal', function ($value) {
            return Response::json($value, 500);
        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
