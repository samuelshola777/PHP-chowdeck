<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('address_z', function (Blueprint $table) {
            $table->id();
            $table->string('streetAddress');
            $table->string('houseNumber');
            $table->string('localGovernmentArea');
            $table->string('residents_state');
            $table->string('address_type');
            $table->unsignedBigInteger('app_user_id')->nullable();
            $table->foreign('app_user_id')->references('id')->on('app_users')->onDelete('set null');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('address_z');
    }
};