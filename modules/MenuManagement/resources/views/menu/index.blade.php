@extends('layouts.dashboard.app')

@section('title', 'Menu')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Menu Management" page="Menu Management" active="Group" route="{{ route('menu.index') }}" />
@endsection

@section('content')
<div class="card card-height-100 table-responsive">
  <!-- cardheader -->
  <div class="card-header border-bottom-dashed align-items-center d-flex">
    <h4 class="card-title mb-0 flex-grow-1">Menu Group</h4>
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
        <th scope="col">Permission</th>
        <th scope="col" class="col-1"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>#541254265</td>
        <td>Amezon</td>
        <td>Cleo Carson</td>
        <td>
          <div class="dropdown">
            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="ri-more-2-fill"></i>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">View</a></li>
              <li><a class="dropdown-item" href="#">Edit</a></li>
              <li><a class="dropdown-item" href="#">Delete</a></li>
            </ul>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Modals add menu -->
<div id="modal-form-add-menu" class="modal fade" tabindex="-1" aria-labelledby="modal-form-add-menu-label" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-form-add-menu-label">Add Menu Group</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary ">Save</button>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection

@push('script')
@endpush