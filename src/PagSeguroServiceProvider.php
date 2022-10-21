<?php
namespace wallace\pagseguro;
use Illuminate\Support\ServiceProvider;
class PagSeguroServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->publishes([
            __DIR__.'/database/migrations'=>database_path('migrations/'),
        ]);
    }
    public function register()
    {
    }
}