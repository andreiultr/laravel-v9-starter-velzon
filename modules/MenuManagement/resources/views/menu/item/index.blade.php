@extends('layouts.dashboard.app')

@section('title', 'Menu Items')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Menu Management" page="Menu Management" active="Item" route="{{ route('menu.index') }}" />
@endsection

@section('content')
<div class="card card-height-100 table-responsive">
  <!-- cardheader -->
  <div class="card-header border-bottom-dashed align-items-center d-flex">
    <h4 class="card-title mb-0 flex-grow-1">Menu</h4>
    <div class="flex-shrink-0">
      <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-form-add-menu">
        <i class="ri-add-line"></i>
        Add
      </button>
    </div>
  </div>
  <!-- end cardheader -->
  <!-- Hoverable Rows -->
  <table class="table table-hover table-nowrap mb-0">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Icon</th>
        <th scope="col">Route</th>
        <th scope="col">Permission</th>
        <th scope="col">Status</th>
        <th scope="col" class="col-1"></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($menuItems as $menuItem)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $menuItem->name }}</td>
        <td>{{ $menuItem->icon }}</td>
        <td>{{ $menuItem->route }}</td>
        <td>{{ $menuItem->permission_name }}</td>
        <td>
          <div class="form-check form-switch form-switch-right form-switch-md">
            <input class="form-check-input code-switcher" type="checkbox" id="tables-small-showcode" @checked($menuItem->status) data-menu-id="{{ $menuItem->id }}">
          </div>
        </td>
        <td>
          <div class="dropdown">
            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="ri-more-2-fill"></i>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="{{ route('menu.item.index', $menuItem->id) }}">Manage Items</a></li>
              <li><a class="dropdown-item" href="#">View</a></li>
              <li><a class="dropdown-item" href="#">Edit</a></li>
              <li><a class="dropdown-item" href="#">Delete</a></li>
            </ul>
          </div>
        </td>
      </tr>
      @empty
      <tr>
        <th colspan="5" class="text-center">No data to display</th>
      </tr>
      @endforelse
    </tbody>
  </table>
  <div class="card-footer py-4">
    <nav aria-label="..." class="pagination justify-content-end">
      {{ $menuItems->links() }}
    </nav>
  </div>
</div>

<!-- Modals add menu -->
<div id="modal-form-add-menu" class="modal fade" tabindex="-1" aria-labelledby="modal-form-add-menu-label" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="{{ route('menu.item.store', $menu->id) }}" method="post">
        @csrf

        <div class="modal-header">
          <h5 class="modal-title" id="modal-form-add-menu-label">Add Menu Item</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Menu Name" name="name">
            <x-form.validation.error name="name" />
          </div>

          <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" class="form-control" id="icon" placeholder="Menu Icon" name="icon">
            <x-form.validation.error name="icon" />
          </div>

          <div class="mb-3">
            <label for="route" class="form-label">Route</label>
            <select class="form-control" id="route" name="route" data-choices data-choices-removeItem>
              @foreach ($routes as $route)
              @if (!blank($route->getName()))
              <option value="{{ $route->getName() }}">{{ $route->getName() }}</option>
              @endif
              @endforeach
            </select>
            <x-form.validation.error name="route" />
          </div>

          <div class="mb-3">
            <label for="permission_name" class="form-label">Permission Name</label>
            <select class="form-control" id="permission_name" name="permission_name" data-choices data-choices-removeItem>
              @foreach ($permissions as $permission)
              <option value="{{ $permission->name }}">{{ $permission->name }}</option>
              @endforeach
            </select>
            <x-form.validation.error name="permission_name" />
          </div>

          <div class="mb-3">
            <div class="form-check form-switch form-switch-right form-switch-md">
              <label for="status" class="form-label">Status</label>
              <input class="form-check-input code-switcher" type="checkbox" id="tables-small-showcode" name="status">
            </div>
            <x-form.validation.error name="status" />
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary ">Save</button>
        </div>
      </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection