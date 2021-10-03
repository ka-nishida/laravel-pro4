<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_admin_users', function (Blueprint $table) {
            $table->uuid('mail_admin_users')->primary();
            $table->dateTime('scan_up_time');
            $table->dateTime('maildeliverdy_up_time');
            $table->dateTime('acting_up_time');
            $table->softDeletes();
            $table->uuid('admin_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_admin_users');
    }
}
