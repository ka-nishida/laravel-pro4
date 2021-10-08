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
            $table->string('client_name');
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->OnDelete('cascade');
            $table->bigInteger('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->OnDelete('cascade');
            $table->integer('scan')->nullable();
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
        Schema::table('mails', function (Blueprint $table) {
            $table->dropForeign('mails_user_id_foreign');
            $table->dropForeign('mails_admin_id_foreign');
        });
    }
}
