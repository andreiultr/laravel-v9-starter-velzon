<?php

namespace Modules\MenuManagement\app\Traits;

use Illuminate\Http\Request;

/**
 * HasRequest
 */
trait HasRequest
{
  public function hasStatus(Request $request): array
  {
    return $request->has('status') && !blank($request->status)
      ? array('status' => true)
      : array('status' => false);
  }
}
