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
<<<<<<< HEAD
            $table->integer('roles_id')->default(4);
            $table->string('password');
=======
<<<<<<< HEAD
            $table->integer('roles_id')->default(4);
            $table->string('password');
=======
            $table->string('password');
            $table->integer('roles_id')->default(4);
>>>>>>> fa88292eb4e2c198bf278ffc9049c6428e355619
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
