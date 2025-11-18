<?php

namespace App\Providers;

use App\Models\Tarea;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
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


        // Gate::define('editar-tarea', function (User $user, Tarea $tarea) {
        //     return $user->id != 1
        //         ? Response::allow()
        //         : Response::denyWithStatus(404);
        // });
        
    }
}
