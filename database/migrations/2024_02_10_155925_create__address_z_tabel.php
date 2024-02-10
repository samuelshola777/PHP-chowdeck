<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('address_zs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('streetAddress');
            $table->string('houseNumber');
            $table->string('localGovernmentArea');
            $table->string('currentState');
            $table->unsignedBigInteger('address_id');->nullable();
            $table->foreign('app_user_id')->references('id')->on('app_user')->onDelete('setnull');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_address_z');
    }
}
