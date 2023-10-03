<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name,255')         
            $table->string('email,255')->unique();
            $table->string('password,255')
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken('char');
            $table->timestamps('created_at');->useCurrent()->nullable();
            $table->timestamps('updated_at');->useCurrent()->nullable();
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
}
