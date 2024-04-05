<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'lang_iso',
        'title',
        'chapo',
        'image',
        'slug',
        'head_keywords',
        'head_description',
        'content',
        'custom_css',
        'custom_js',
        'activ',
        'showPublicationDate',
        'integrateGoogleMaps',
        'showOnMenu',
        'user_id',
        'menu_id',
    ];
}
