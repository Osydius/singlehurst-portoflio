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

    @if (Auth::check())
        <div class="row flex-nowrap">
            <div class="col-12">
                @if (!empty($createAction))
                    <a href="{{ route($createAction) }}" class="btn btn-success">
                        Create {{ $modelName }}
                    </a>
                @endif

                @if (!empty($editAction) && !empty($modelBind))
                    <a href="{{ route($editAction, $modelBind) }}" class="btn btn-primary">
                        Edit {{ $modelName }}
                    </a>
                @endif

                @if (!empty($deleteAction) && !empty($modelBind))
                    <form action="{{ route($deleteAction, $modelBind) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete {{ $modelName }}</button>
                    </form>
                @endif
            </div>
        </div>
    @endif
</header>
