<?php
// stg\pagseguro\src\PagSeguroServiceProvider.php
namespace stg\PagSeguro;
use Illuminate\Support\ServiceProvider;
class PagSeguroServiceProvider extends ServiceProvider 
{
    public function boot()
    {
        
  
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
    public function register()
    {
        
        
    }
}