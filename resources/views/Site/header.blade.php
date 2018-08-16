<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-8">
            <div class="row d-flex align-items-center h-100">
                <span class="col-3 text-left align-middle">
                    Casey Singlehurst
                </span>

                @include ('Site.nav')
            </div>
        </div>

        <div class="col-4 d-flex justify-content-end align-items-center">
            @if (Auth::check())
                <span>{{ Auth::user()->name }}</span>
                &nbsp;|&nbsp;
                <a href="/logout">Logout</a>
            @endif
        </div>
    </div>
</header>
