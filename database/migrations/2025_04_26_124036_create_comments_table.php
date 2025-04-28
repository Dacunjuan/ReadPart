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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('content'); // 評論內容
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // 外鍵，關聯到 posts 表
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // 外鍵，關聯到 users 表
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
