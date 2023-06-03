<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Info extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slogan',
        'summary',
        'phone',
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
}
