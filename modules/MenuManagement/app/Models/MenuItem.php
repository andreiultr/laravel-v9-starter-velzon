<?php

namespace Modules\MenuManagement\app\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuItem extends Model
{
    use Uuid, HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\MenuManagement\Database\factories\MenuItemFactory::new();
    }
}
