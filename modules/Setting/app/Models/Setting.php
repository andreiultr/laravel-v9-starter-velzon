<?php

namespace Modules\Setting\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'value'];

    protected static function newFactory()
    {
        return \Modules\Setting\Database\factories\SettingFactory::new();
    }
}
