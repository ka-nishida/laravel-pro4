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
            $table->uuid('user_uu_id')->primary();
            $table->string('password');
            $table->string('user_name')->comment("ユニーク制限");
            $table->char('zipcode');
            $table->string('address');
            $table->string('tel');
            $table->string('sex');
            $table->timestamps();
            $table->softDeletes();
            $table->uuid('mail_uu_id');
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
