<?php

namespace App\Providers;

use App\Services\Impl\TodoServiceImpl;
use App\Services\TodoService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class TodoServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public array $singletons =  [
        TodoService::class => TodoServiceImpl::class
    ];

    public function provides(): array
    {
        return [TodoService::class];
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
