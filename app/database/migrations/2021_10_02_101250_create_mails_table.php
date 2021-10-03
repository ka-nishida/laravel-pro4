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
            $table->uuid('mail_uu_id')->primary();
            $table->string('photo_list');
            $table->string('photo_detail');
            $table->uuid('admin_user_uu_id');
            $table->uuid('user_action_uu_id');
            $table->string('client_name');
            $table->string('client_adress');
            $table->string('client_tel');
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
