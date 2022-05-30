@extends('layouts.dashboard.app')

@section('title', 'Permission Management')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Permission Management" page="Permission Management" active="Permission" route="{{ route('permission.index') }}" />
@endsection