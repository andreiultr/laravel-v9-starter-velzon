<?php

namespace Modules\PermissionManagement\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\MenuManagement\app\Models\MenuItem;

class Route extends Model
{
    use HasFactory;

    protected $fillable = ['route', 'permission_name', 'status', 'description'];

    protected static function newFactory()
    {
        return \Modules\PermissionManagement\Database\factories\RouteFactory::new();
    }

    public function is_active()
    {
        return $this->hasOne(MenuItem::class, 'route', 'route');
    }
}
