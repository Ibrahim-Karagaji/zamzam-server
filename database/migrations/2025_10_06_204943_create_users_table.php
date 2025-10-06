<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("last_name");
            $table->string("email")->unique();
            $table->string("password");
            $table->string("personal_photo");
            $table->string("identity_photo");
            $table->string("phone_number", 10);
            $table->enum("position", ["repository", "filed"])->nullable();
            $table->enum("aplicant", ["worker", "manger", "supervisor"]);
            $table->enum("role", ["worker", "manger", "supervisor"]);
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
