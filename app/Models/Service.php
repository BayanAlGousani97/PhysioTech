<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;
use  \Illuminate\Database\Eloquent\Casts\Attribute;

class Service extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'image',
        'description',
        'status'
    ];

    public $translatable = ['name', 'short_description', 'image', 'description'];


    /**
     * Get the image as a url in english
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function imageEn(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->getImageLangFullPath()['en'],
        );
    }

    /**
     * Get the image as a url in arabic
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function imageAr(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->getImageLangFullPath()['ar'],
        );
    }
    /**
     * Generates Full Path Image of this banner
     * @return string
     */
    public function getImageLangFullPath()
    {
        // Todo : set default images asset('/img/default-logo.png')
        $service = $this->getTranslations();
        if (!$service)
            return [
                ['en' => ''],
                ['ar' => '']
            ];

        if (!$service['image'])
            return [
                ['en' => ''],
                ['ar' => '']
            ];

        $imageEn = $service['image']['en'] ? $service['image']['en'] : '';
        $imageAr = $service['image']['ar'] ? $service['image']['ar'] : '';

        $hostwithHttp = request()->getSchemeAndHttpHost();
        return
            [
                'en' => $hostwithHttp . '/img/services/' . $imageEn,
                'ar' => $hostwithHttp . '/img/services/' . $imageAr
            ];
    }
}
