<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;
class CreatePagseguroConfigs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $usuario= User::find(1);
        if($usuario->grupo_id==1) {
            Schema::create('pagseguro_configs', function (Blueprint $table) {
                $table->id();
                $table->string('token');
                $table->string('email');
                $table->boolean('sandbox');
                $table->boolean('sandboxpix');
                $table->string('pixclientid')->nullable();
                $table->string('pixclientsecret')->nullable();
                $table->string('tokenpix')->nullanle();
                $table->timestamps();
            });
        }
   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagseguro_configs');
    }
}
