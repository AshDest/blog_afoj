<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->string('image_top')->nullable();
            $table->string('slug')->unique();
            $table->text('body');
            $table->text('citation')->nullable();
            $table->string('autor')->nullable();
            $table->string('image_bottom')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->foreignIdFor(Category::class)->cascadeOnDelete()->cascadeOnUpdate();
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
