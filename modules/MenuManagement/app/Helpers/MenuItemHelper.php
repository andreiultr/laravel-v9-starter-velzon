<?php

namespace Modules\MenuManagement\app\Helpers;

use Illuminate\Http\Request;
use Modules\MenuManagement\app\Models\MenuGroup;
use Modules\MenuManagement\app\Traits\HasRequest;

/**
 * MenuItemHelper
 */
trait MenuItemHelper
{
  use HasRequest;

  public function _store(Request $request, MenuGroup $menu): array
  {
    return $this->__merge($request, $menu);
  }

  private function __merge(Request $request, MenuGroup $menu): array
  {
    $merge = array('menu_group_id' => $menu->id);

    foreach ($this->__request($request) as $result) {
      $merge = array_merge($merge, $result);
    }

    return $merge;
  }

  private function __request(Request $request): array
  {
    return array(
      $request->validated(),
      $this->hasStatus($request),
    );
  }
}
