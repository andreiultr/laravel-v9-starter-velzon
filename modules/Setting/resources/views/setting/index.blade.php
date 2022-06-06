@extends('layouts.dashboard.app')


@section('title', 'General Setting')

@section('breadcrumb')
<x-dashboard::breadcrumb title="General Setting" page="General Setting" active="Setting" route="{{ route('setting.index') }}" />
@endsection

@section('content')
<div class="card card-height-100">
  <!-- cardheader -->
  <div class="card-header border-bottom-dashed align-items-center d-flex">
    <h4 class="card-title mb-0 flex-grow-1">Setting</h4>
  </div>
  <!-- end cardheader -->
  <div class="card-body">

    <form action="{{ route('setting.update', $setting->id) }}" method="post">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="role" class="form-label">Default User Role</label>
        <select class="form-select mb-3" aria-label="Select User Role" data-choices name="role">
          @foreach ($roles as $role)
          <option @selected($role->name == $data->role) value="{{ $role->name }}">{{ $role->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <div class="form-check form-switch form-check-right">
          <input class="form-check-input" type="checkbox" role="switch" id="email_should_verified" checked name="email_should_verified" value="1">
          <label class="form-check-label" for="email_should_verified">Email Should Verified</label>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>

    </form>

  </div>
</div>
@endsection