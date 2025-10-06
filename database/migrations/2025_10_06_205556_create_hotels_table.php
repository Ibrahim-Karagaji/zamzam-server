<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("location");
            $table->string("phone_number");
            $table->integer("number_of_pilgrims");
            $table->integer("contract_duration");
            $table->string("order_status", ["in_progress", "completed"]);
            $table->text("note")->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
