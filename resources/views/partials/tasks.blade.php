@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-md-4">
            @livewire('task-create')
        </div>
        <div class="col-md-8">
            @livewire('task-list')
        </div>
    </div>
</div>
@endsection