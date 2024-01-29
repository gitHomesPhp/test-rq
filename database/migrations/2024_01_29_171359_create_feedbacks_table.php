<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->string('name');
            $table->string('phone');
            $table->text('text');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};
