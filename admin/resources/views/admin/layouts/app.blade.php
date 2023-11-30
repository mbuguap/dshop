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
                <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
                <div class="container-fluid mt-n22">
                    @yield('main')
                </div>
            </div>
        </div>
        </div>


    </main>

    @include('admin.layouts.scripts')
</body>

</html>