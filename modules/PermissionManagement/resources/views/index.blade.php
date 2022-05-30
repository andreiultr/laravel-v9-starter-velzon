@extends('layouts.dashboard.app')


@section('title', 'Menu')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Menu Management" page="Menu Management" active="Group" route="{{ route('menu.index') }}" />
@endsection