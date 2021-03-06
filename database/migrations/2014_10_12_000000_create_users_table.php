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
            $table->id();
            $table->string('uuid')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->json('contacts')->nullable();
            $table->json('addresses')->nullable();
            $table->json('meta')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });


        // Schema::create('doctors', function (Blueprint $table) {
        //     $table->id();
        //     $table->uuid('uuid')->unique();
        //     $table->foreignIdFor(User::class);
        //     $table->string('title');
        //     $table->string('degree');
        //     $table->string('experience');
        //     $table->float('fees');
        //     $table->integer('slot_duration');
        //     $table->boolean('approved')->default(1);
        //     $table->boolean('active')->default(1);
        //     $table->json('availability');
        //     $table->timestamps();
        // });
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
