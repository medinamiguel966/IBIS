<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tx_nombres',50);
            $table->string('tx_apellidos',50);
            $table->string('tx_usuario',20)->unique();
            $table->string('tx_mail',50)->unique();
            $table->string('tx_telefono',20);
            $table->string('tx_rol',10);
            $table->string('tx_password',20);
            $table->timestamp('fe_email_verificado')->nullable();
            $table->string('sn_premium',1)->default('N');;
            $table->timestamp('fe_vigencia_premium')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
