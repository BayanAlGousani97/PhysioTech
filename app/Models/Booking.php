<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;
    const MALE = 1;
    const FEMALE = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'phone',
        'card_number',
        'gender',
        'age',
        'status',
        'notes'
    ];

    public static $genders = [1=>'male' , 2=>'female'];

    /**
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function gender(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return new \Illuminate\Database\Eloquent\Casts\Attribute(
            get: fn ($value) => (empty($value) ? self::$genders[strtolower(1)] : self::$genders[strtolower($value)]),
            set: fn ($value) => (empty($value) ? 1 : array_search(strtolower($value), self::$genders)),
        );
    }

        /**
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function fullName(): \Illuminate\Database\Eloquent\Casts\Attribute
    {
        return new \Illuminate\Database\Eloquent\Casts\Attribute(
            get: fn ($value) => $this->first_name . " " . $this->middle_name . " ". $this->last_name,
        );
    }


}
