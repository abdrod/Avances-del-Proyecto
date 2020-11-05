<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            
            $table->timestamps();

        });

  Schema::table('users',function(Blueprint $table){
    $table->unsignedBigInteger('roles_id')->default(0);
   

  });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
    Schema::table('users',function(Blueprint $table){
    $table->dropColumn('roles_id');

});
        Schema::dropIfExists('roles');
    }
}

