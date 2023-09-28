<?php

use App\Models\Blog\Category;
use App\Models\User;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->uuid();

            $table->string('title', 255);
            $table->string('slug', 255)->unique();
            $table->longText('description')->nullable();
            $table->longText('body');
            $table->boolean('active')->default(true);

            $table->foreignIdFor(Category::class)->index()->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(User::class)->index()->nullable()->constrained()->nullOnDelete();

            $table->timestamps();
            $table->softDeletes();
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
