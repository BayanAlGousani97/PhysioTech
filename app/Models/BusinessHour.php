<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessHour extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'day',
        'from',
        'to',
        'status',
    ];

    // TODO : Accessor and mutatuor to days
    protected $casts = [
        'from' => 'date:h:i',
        'to' => 'date:h:i'
    ];
}
