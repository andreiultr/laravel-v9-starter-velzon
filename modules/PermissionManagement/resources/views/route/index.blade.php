@extends('layouts.dashboard.app')

@section('title', 'Route Management')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Route Management" page="Route Management" active="Route" route="{{ route('route.index') }}" />
@endsection