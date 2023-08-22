<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable()->unique();
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('external_id')->nullable();
            $table->string('external_auth')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            // $table->string('password')->nullable()->change();
            $table->string('password');
            // el nullable y change esta generando conflictos
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
        Schema::dropIfExists('users');
    }
};
