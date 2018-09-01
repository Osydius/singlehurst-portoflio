@extends ('Layout.html_default')

@section ('pageTitle')
    Create a project
@endsection

@section ('content')
    <div class="container">
        <h1>Create a {{ $modelName }}</h1>

        <hr>

        @include ('Form.errors')

        <form method="POST" action="{{ route($controllerName . '.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Description:</label>
                <textarea type="textarea" id="description" name="description" class="form-control" row="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="name">Video url:</label>
                <input type="text" id="video_url" name="video_url" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Github url:</label>
                <input type="text" id="github_url" name="github_url" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create post</button>
            </div>
        </form>
    </div>
@endsection
