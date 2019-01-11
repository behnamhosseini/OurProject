<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneActivationCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_activation_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('phoneNumber')->unique();
            $table->integer('code')->length(5);
            $table->timestamp('expires_at');
            $table->integer('activation')->default(0);
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
        Schema::dropIfExists('phone_activation_codes');
    }


}
