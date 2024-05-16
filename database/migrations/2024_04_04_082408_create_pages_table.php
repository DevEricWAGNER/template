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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type');
            $table->string('lang_iso');
            $table->string('title');
            $table->string('chapo');
            $table->string('image');
            $table->string('slug');
            $table->text('head_keywords');
            $table->text('head_description');
            $table->longText('content');
            $table->text('custom_css');
            $table->text('custom_js');
            $table->boolean('activ');
            $table->boolean('showPublicationDate');
            $table->boolean('integrateGoogleMaps');
            $table->boolean('showOnMenu');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('menu_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
