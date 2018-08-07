@extends ('Layout.html_default')

@section ('pageTitle')
    Create a post
@endsection

@section ('content')
    <div class="container">
        <h1>Create a post</h1>

        <hr>

        @include ('Form.errors')

        <form method="POST" action="/posts">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea type="textarea" id="body" name="body" class="form-control" row="5"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create post</button>
            </div>
        </form>
    </div>
@endsection
