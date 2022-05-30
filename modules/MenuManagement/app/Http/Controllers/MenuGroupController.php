<?php

namespace Modules\MenuManagement\app\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\MenuManagement\app\Helpers\MenuGroupHelper;
use Modules\MenuManagement\app\Http\Requests\MenuGroup\StoreMenuGroupRequest;
use Modules\MenuManagement\app\Models\MenuGroup;
use Spatie\Permission\Models\Permission;

class MenuGroupController extends Controller
{
    use MenuGroupHelper;

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $menuGroups = MenuGroup::query()
            ->when(!blank($request->search), function ($query) use ($request) {
                return $query
                    ->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('permission_name', 'like', '%' . $request->search . '%');
            })
            ->orderBy('name')
            ->paginate(10);
        $permissions = Permission::orderBy('name')->get();

        return view('menumanagement::menu.index', compact('menuGroups', 'permissions'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('menumanagement::menu.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreMenuGroupRequest $request)
    {
        return MenuGroup::create($this->_store($request))
            ? back()->with('success', 'Menu group has been created successfully!')
            : back()->with('failed', 'Menu group was not created successfully!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('menumanagement::menu.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('menumanagement::menu.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
