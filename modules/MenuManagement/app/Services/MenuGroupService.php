<?php

namespace Modules\MenuManagement\app\Services;

use Illuminate\Http\Request;
use Modules\MenuManagement\app\Models\MenuGroup;

class MenuGroupService
{
  public function create(Request $request): MenuGroup
  {
    return MenuGroup::create(array_merge(
      $request->validated(),
      array('status' => !blank($request->status) ? true : false),
    ));
  }

  public function update(Request $request, MenuGroup $menuGroup): MenuGroup|bool
  {
    return $menuGroup->update(array_merge(
      $request->validated(),
      array('status' => !blank($request->status) ? true : false)
    ));
  }
}
