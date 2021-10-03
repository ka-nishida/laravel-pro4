<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_actions', function (Blueprint $table) {
            $table->uuid('user_action_uu_id');
            $table->integer('scan_flag');
            $table->dateTime('scan_push_time');
            $table->integer('maildeliverdy__flag');
            $table->integer('maildeliverdy_push_time');
            $table->integer('acting__flag');
            $table->dateTime('acting_push_time');
            $table->integer('delete_flag');
            $table->dateTime('delete_push_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_actions');
    }
}
