<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;

class ApiFakeStoreProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('fake-store', function()
        {
            return Http::withOptions([
                'verify' => false,
                'base_uri' => 'https://fakestoreapi.com/',
            ])->withHeaders([
                'Authorization' => 'Bearer',
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
