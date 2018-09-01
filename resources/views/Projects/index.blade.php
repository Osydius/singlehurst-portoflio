@extends ('Layout.html_default')

@section ('pageTitle')
    Projects
@endSection

@section ('content')
    @if (count($projects))
        @foreach ($projects as $project)
            @include ('Projects.Partials.listing')
        @endforeach
    @else
        <p>No project have been written yet.</p>
    @endif
@endSection
