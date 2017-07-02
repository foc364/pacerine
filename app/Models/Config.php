<?php

namespace Pacerini\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'time',
        'text_home',
        'text_orientation',
        'text_orientation_1',
        'text_orientation_2',
        'text_orientation_3',
        'text_about',
        'contact_email',
    ];

    public function getScheduleConfig()
    {
        return json_decode(Self::findOrFail(1)->time, true);
    }
}
