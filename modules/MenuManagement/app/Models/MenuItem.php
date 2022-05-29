<?php

namespace Modules\MenuManagement\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon', 'route', 'status', 'permission_name', 'menu_group_id'];

    protected static function newFactory()
    {
        return \Modules\MenuManagement\Database\factories\MenuItemFactory::new();
    }
}
