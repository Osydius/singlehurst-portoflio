<div class="row">
    <div class="col-2">
        <img src="https://via.placeholder.com/100x100">
    </div>

    <div class="col-10">
        <a href="{{ route($controllerName . '.show', $project->id) }}">
            {{ $project->name }}
        </a>
    </div>
</div>
