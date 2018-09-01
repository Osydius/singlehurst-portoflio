@extends ('Layout.html_default')

@section ('content')
    {{ $project->name }}

    {{ $project->description }}
@endsection
