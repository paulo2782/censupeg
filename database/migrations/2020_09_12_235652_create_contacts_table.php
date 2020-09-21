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
            $table->string('name',150);
            $table->string('email',150);
            $table->string('phone',14);
            $table->string('contact_origin',150);
            $table->longText('interest_course')->nullable();
            $table->date('date_contact');
            $table->date('scheduled_return');
            $table->time('schedule');
            $table->string('status',200);
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
