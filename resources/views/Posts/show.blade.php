@extends ('Layout.html_default')

@section ('content')
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h1>{{ $post->name }}</h1>

                {{ $post->body }}
            </div>
        </div>
    </main>
@endsection
