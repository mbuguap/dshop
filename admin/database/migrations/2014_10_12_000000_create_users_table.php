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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('forget_password_token')->nullable();
            $table->integer('status')->default(0);
            $table->string('provider_id')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_avatar')->nullable();
            $table->string('image')->nullable();
            $table->string('phone')->nullable();
            $table->integer('country_id')->default(0);
            $table->integer('state_id')->default(0);
            $table->integer('city_id')->default(0);
            $table->string('zip_code')->nullable();
            $table->string('address')->nullable();
            $table->integer('is_vendor')->default(0);
            $table->string('verify_token')->nullable();
            $table->integer('email_verified')->default(0);
            $table->integer('agree_policy')->default(0);            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
