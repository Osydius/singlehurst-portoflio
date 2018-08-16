@extends ('Layout.html_default')

@section ('content')
    @include ('Components.jumbotron')

    <div class="row">
        <div class="col-12">
            <div class="m-b-md text-center home__title">
                Casey Singlehurst
            </div>
        </div>
    </div>

    <div class="row home__nav">
        <div class="col-3 text-center home__nav--block tile">
            <a href="/projects" class="tile__link">
                <img src="https://via.placeholder.com/200x200" class="tile__image">
                <span class="tile__text--center">Projects<span>
            </a>
        </div>

        <div class="col-3 text-center home__nav--block tile">
            <a href="/posts" class="tile__link">
                <img src="https://via.placeholder.com/200x200" class="tile__image">
                <span class="tile__text--center">Blog</span>
            </a>
        </div>

        <div class="col-3 text-center home__nav--block tile">
            <a href="/about" class="tile__link">
                <img src="https://via.placeholder.com/200x200" class="tile__image">
                <span class="tile__text--center">About</span>
            </a>
        </div>

        <div class="col-3 text-center home__nav--block tile">
            <a href="/contact" class="tile__link">
                <img src="https://via.placeholder.com/200x200" class="tile__image">
                <span class="tile__text--center">Contact</span>
            </a>
        </div>
    </div>
@endSection
