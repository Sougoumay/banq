<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('profession');
            $table->string('address');
            $table->date('birthday');
            $table->bigInteger('advisor_id')->unsigned();
            $table->foreign('advisor_id')->references('id')->on('users')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('family_status' ,['single', 'married', 'divorced', 'widower', 'in relationship'])->default('single');
            $table->softDeletes();
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
        Schema::dropIfExists('clients');
    }
};
