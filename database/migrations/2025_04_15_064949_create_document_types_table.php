<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('document_types', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->timestamp('created_at');
            $table->uuid('created_by_id');
            $table->timestamp('updated_at')->nullable();
            $table->uuid('updated_by_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('document_types');
    }
};
