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
            $table->json('meta_keywords')->nullable();
            $table->json('meta_robos')->nullable();

            /***og facebook ***/
            //https://www.ionos.fr/digitalguide/web-marketing/les-media-sociaux/open-graph/
            $table->string('og_title')->nullable();
            $table->string('og_sitename')->nullable();
            $table->longText('og_description')->nullable();
            $table->string('og_type')->nullable();
            $table->string('og_url')->nullable();
            $table->string('og_local')->nullable();
            $table->string('og_image')->nullable();
            $table->json('og_data')->nullable(); // like og:image:secure_url,og:image:type,og:image:width,og:image:height;...
            $table->json('og_property')->nullable(); // like article:published_time,article:section;...

            /***og twitter ***/
            $table->string('twitter_card')->nullable();
            $table->string('twitter_site')->nullable();
            $table->string('twitter_title')->nullable();
            $table->longText('twitter_description')->nullable();
            $table->string('twitter_image')->nullable();

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
