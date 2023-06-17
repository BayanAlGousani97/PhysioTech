<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Info extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slogan',
        'summary',
        'phone1',
        'phone2',
        'tel',
        'address',
        'email',
        'whatsapp',
        'facebook',
        'instagram',
        'telegram',
        'youtube',
        'snapchat',
        'twitter',
        'map',
        'linkedin',
    ];

    public $translatable = ['title', 'slogan', 'summary', 'phone', 'address'];
}
