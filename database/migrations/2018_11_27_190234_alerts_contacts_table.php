<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlertsContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('alerts_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('alerts_id');
            $table->foreign('alerts_id')->references('id')->on('alerts');
            $table->unsignedInteger('contacts_id');
            $table->foreign('contacts_id')->references('id')->on('contacts');
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
        Schema::dropIfExists('alerts_contacts');
    }
}
