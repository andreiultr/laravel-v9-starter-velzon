@extends('layouts.dashboard.app')

@section('title', 'Role Management')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Role Management" page="Role Management" active="Role" route="{{ route('role.index') }}" />
@endsection