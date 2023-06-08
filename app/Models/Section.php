<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Str;
use \Illuminate\Database\Eloquent\Casts\Attribute;


class Section extends Model
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
        'title',
        'image',
        'description',
        'status'
    ];

    public $translatable = ['name', 'title', 'image', 'description'];

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
     * Generates Full Path Image of this section
     * @return string
     */
    public function getImageLangFullPath()
    {
        // Todo : set default images asset('/img/default-logo.png')
        $section = $this->getTranslations();
        if (!$section)
            return [
                ['en' => ''],
                ['ar' => '']
            ];

        if (!$section['image'])
            return [
                ['en' => ''],
                ['ar' => '']
            ];

        $imageEn = $section['image']['en'] ? $section['image']['en'] : '';
        $imageAr = $section['image']['ar'] ? $section['image']['ar'] : '';

        $hostwithHttp = request()->getSchemeAndHttpHost();
        return
            [
                'en' => $hostwithHttp . '/img/sections/' . $this->slug . '/' . $imageEn,
                'ar' => $hostwithHttp . '/img/sections/' . $this->slug . '/'  . $imageAr
            ];
    }
}
