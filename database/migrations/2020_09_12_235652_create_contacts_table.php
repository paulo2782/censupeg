<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('name',150)->nullable();
            $table->string('email',150)->nullable();
            $table->string('phone',14)->nullable();
            $table->string('schooling',150)->nullable();
            $table->string('state')->nullable();
            $table->string('city',150)->nullable();
            $table->string('contact_origin',150);
            $table->longText('interest_course')->nullable();
            $table->date('date_contact')->nullable();
            $table->date('scheduled_return')->nullable();
            $table->time('schedule')->nullable();
            $table->string('status',200)->nullable();
            $table->text('additional_information')->nullable();
            $table->text('other_course')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
