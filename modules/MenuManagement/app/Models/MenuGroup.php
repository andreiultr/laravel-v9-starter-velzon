<?php

namespace Modules\MenuManagement\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuGroup extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'permission_name'];

    protected $casts = ['status' => 'boolean'];

    protected static function newFactory()
    {
        return \Modules\MenuManagement\Database\factories\MenuGroupFactory::new();
    }

    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }
}
