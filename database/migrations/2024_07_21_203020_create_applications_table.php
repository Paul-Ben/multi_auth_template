<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('applicationId');
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('phoneNumber');
            $table->text('address');
            $table->string('gender');
            $table->string('maritalStatus');
            $table->string('nationality')->nullable();
            $table->string('stateOfOrigin')->nullable();
            $table->string('lga')->nullable();
            $table->string('courseAppliedFor');
            $table->date('dateOfBirth');
            $table->string('nextOfKin')->nullable();
            $table->string('nextOfKinPhoneNumber')->nullable();
            $table->string('nextOfKinAddress')->nullable();
            $table->string('applicationStatus')->nullable();
            $table->string('olevel')->nullable();
            $table->string('alevel')->nullable();
            $table->string('jamb')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
