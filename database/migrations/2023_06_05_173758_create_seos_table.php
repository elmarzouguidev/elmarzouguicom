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
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            
            $table->morphs('seoable');
            $table->string('meta_title')->nullable();
            $table->string('meta_url')->nullable();
            $table->longText('meta_description')->nullable();

            /***og facebook ***/
            $table->string('og_title')->nullable();
            $table->string('og_sitename')->nullable();
            $table->longText('og_description')->nullable();
            $table->string('og_type')->nullable();
            $table->string('og_url')->nullable();
            $table->string('og_local')->nullable();
            $table->string('og_image')->nullable();

            /***og twitter ***/
            $table->string('twitter_title')->nullable();
            $table->longText('twitter_description')->nullable();
            
            $table->boolean('is_default')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seos');
    }
};
