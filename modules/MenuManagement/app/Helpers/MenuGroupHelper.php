<?php

namespace Modules\MenuManagement\app\Helpers;

use Illuminate\Http\Request;
use Modules\MenuManagement\app\Traits\HasRequest;

/**
 * MenuGroupHelper
 */
trait MenuGroupHelper
{
  use HasRequest;

  public function _store(Request $request): array
  {
    return $this->__merge($request);
  }

  private function __merge(Request $request): array
  {
    $merge = array();

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
