<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.meta')
    @include('admin.layouts.styles')
</head>

<body>

    <main id="main-wrapper" class="main-wrapper">

        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')

        <div id="app-content">
            <div class="app-content-area">
                <div class="container-fluid">
                    @yield('main')
                </div>
            </div>
        </div>
        </div>


    </main>

    @include('admin.layouts.scripts')

    @if($errors->any())
    @foreach($errors->all() as $error)
    @php
    toastr()->error($error)
    @endphp
    @endforeach
    @endif
</body>

</html>