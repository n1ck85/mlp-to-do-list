@extends('layouts.app')
@section('content')
    @livewire('task-list')
@endsection

@section('notifications')
    @include('partials.notifications')
@endsection