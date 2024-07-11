<?php

namespace App\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use Revolution\Threads\Facades\Threads;

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
        Threads::macro('userInsights', function (?array $metric = null): array {
            $metric ??= [
                'likes',
                'replies',
                'reposts',
                'quotes',
                'followers_count',
            ];

            $response = $this->http()
                ->get('me/threads_insights', [
                    'metric' => Arr::join($metric, ','),
                ]);

            return $response->json() ?? [];
        });
    }
}
