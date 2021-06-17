<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('calls')) {
            Schema::create('calls', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedBigInteger('contact_id')->index();
                $table->unsignedBigInteger('user_id')->index();
                $table->unsignedBigInteger('course_id')->index();
                $table->date('date_contact');
                $table->date('date_return');
                $table->time('schedule');
                $table->time('time')->nullable();
                $table->string('status', 150);
                $table->text('additional_information');

                $table
                    ->foreign('contact_id')
                    ->references('id')->on('contacts')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table
                    ->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table
                    ->foreign('course_id')
                    ->references('id')->on('courses')
                    ->onDelete('no action')
                    ->onUpdate('no action');

                $table->timestamps();
            });
        }
    }
}
