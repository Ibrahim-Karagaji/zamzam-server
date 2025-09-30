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
            $table->string("family_name");
            $table->string("email");
            $table->string("password");
            $table->string("user_photo");
            $table->string("identity_photo");
            $table->string("phone_number", 20);
            $table->enum('role', ["manager", "worker", "supervisor"]);
            $table->enum("position", ["repository", "filed"]);
            $table->foreignId("hired_by")->nullable()->constrained("users");
            $table->foreignId("supervisor_id")->nullable()->constrained("users");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
