<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;
use \Illuminate\Database\Eloquent\Casts\Attribute;


class Banner extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'image',
        'description',
        'status',
    ];

    public $translatable = ['title', 'description', 'image'];

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
        $banner = $this->getTranslations();
        if (!$banner)
            return [
                ['en' => ''],
                ['ar' => '']
            ];

        if (!$banner['image'])
            return [
                ['en' => ''],
                ['ar' => '']
            ];

        $imageEn = $banner['image']['en'] ? $banner['image']['en'] : '';
        $imageAr = $banner['image']['ar'] ? $banner['image']['ar'] : '';

        $hostwithHttp = request()->getSchemeAndHttpHost();
        return
            [
                'en' => $hostwithHttp . '/img/banners/' . $imageEn,
                'ar' => $hostwithHttp . '/img/banners/' . $imageAr
            ];
    }
}
