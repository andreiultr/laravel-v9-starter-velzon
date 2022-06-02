<?php

namespace Modules\PermissionManagement\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Route extends Model
{
    use HasFactory;

    protected $fillable = ['route', 'permission_name', 'description'];

    protected static function newFactory()
    {
        return \Modules\PermissionManagement\Database\factories\RouteFactory::new();
    }
}
