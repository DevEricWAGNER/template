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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('siteName');
            $table->string('sitePhoneNumber');
            $table->string('siteAuthor');
            $table->text('siteAdress');
            $table->text('siteCopyright');
            $table->string('siteKeywords');
            $table->string('siteDescription');
            $table->text('siteAdditional_metatags');
            $table->string('siteEmail');
            $table->string('siteLogo');
            $table->boolean('logo_activ')->default(0);
            $table->string('siteEmailName');
            $table->text('siteEmailPhoto');
            $table->boolean('googleCapt_activ');
            $table->string('googleCapt_siteKey');
            $table->string('googleCapt_secretKey');
            $table->boolean('googleAnalytics_activ');
            $table->string('googleAnalytics_code');
            $table->boolean('googleMaps_activ');
            $table->string('googleMaps_code');
            $table->boolean('matomo_activ');
            $table->text('matomo_script');
            $table->boolean('cookies_enable');
            $table->string('cookies_title');
            $table->text('cookies_text');
            $table->longText('cookies_politique_page');
            $table->longText('mentions_legales_page');
            $table->longText('accessibilite_page');
            $table->string('siteYoutube');
            $table->string('siteFacebook');
            $table->string('siteTwitter');
            $table->string('siteInstagram');
            $table->string('siteLinkedin');
            $table->boolean('viewHomePageLinkInNavbar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
