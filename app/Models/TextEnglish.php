<?php

namespace Pacerini\Models;

use Illuminate\Database\Eloquent\Model;

class TextEnglish extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'about',
        'about_li',
        'about_li_2',
        'about_li_3',
        'about_experience',
        'about_conclusion',
        'service_1',
        'service_2',
        'service_3',
        'service_4',
        'service_5',
        'service_6',
        'service_7',
        'schedule',
    ];

    protected $table = 'texts_english';

}
