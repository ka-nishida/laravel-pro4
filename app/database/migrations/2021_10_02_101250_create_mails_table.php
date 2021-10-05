<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo_list');
            $table->string('photo_detail')->nullable();
            $table->uuid('admin_user_uu_id')->nullable();
            $table->uuid('user_action_uu_id')->nullable();
            $table->string('client_name');
            $table->string('client_adress')->nullable();
            $table->string('client_tel')->nullable();
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
        Schema::dropIfExists('mails');
    }
}
