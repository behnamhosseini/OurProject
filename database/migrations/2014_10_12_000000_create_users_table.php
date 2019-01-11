<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('userName')->unique();
            $table->text('bio')->nullable();
            $table->string('sex')->nullable();
            $table->timestamp('dateOfBirth')->nullable();
            $table->string('interests')->nullable();
            $table->string('profilePictures')->nullable();
            $table->string('accountType')->default('public');
            $table->string('level')->default('user');
            $table->bigInteger('phoneNumber')->unique()->nullable();
            $table->string('job')->nullable();
            $table->string('maritalStatus')->default('single');
            $table->integer('inRellWith')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('socialMedia')->nullable();
            $table->string('school')->nullable();
            $table->string('university')->nullable();
            $table->string('degree')->default('diploma');
            $table->string('fieldOfStudy')->nullable();
            $table->string('badges')->nullable();
            $table->string('customStatus')->nullable();
            $table->string('ipAddress')->nullable();
            $table->timestamp('lastActivity')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('whoCanFollow')->default('everyBody');
            $table->string('notifyBirthdays')->default('on');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
