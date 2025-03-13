@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
    search
        </div>
        <div class="col-md-8">
        @livewire('task-list')
        </div>
    </div>
</div>
@endsection