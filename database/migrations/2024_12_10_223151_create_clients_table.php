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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('gender');
            $table->string('cpf');
            $table->string('phone')->nullable()->change();
            $table->string('cellphone');
            $table->string('birth');
            $table->string('cep')->nullable()->change();
            $table->string('street');
            $table->string('number')->nullable()->change();
            $table->string('complement')->nullable()->change();
            $table->string('district');
            $table->string('city');
            $table->string('state');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
