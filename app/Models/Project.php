<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'siteName',
        'sitePhoneNumber',
        'siteAuthor',
        'siteAdress',
        'siteCopyright',
        'siteKeywords',
        'siteDescription',
        'siteAdditional_metatags',
        'siteEmail',
        'siteLogo',
        'logo_activ',
        'siteEmailName',
        'siteEmailPhoto',
        'googleCapt_activ',
        'googleCapt_siteKey',
        'googleCapt_secretKey',
        'googleAnalytics_activ',
        'googleAnalytics_code',
        'googleMaps_activ',
        'googleMaps_code',
        'matomo_activ',
        'matomo_script',
        'cookies_enable',
        'cookies_title',
        'cookies_text',
        'cookies_politique_page',
        'mentions_legales_page',
        'accessibilite_page',
        'siteYoutube',
        'siteFacebook',
        'siteTwitter',
        'siteInstagram',
        'siteLinkedin',
        'viewHomePageLinkInNavbar',
        'stripe_activ',
        'stripe_key',
        'stripe_secret',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}