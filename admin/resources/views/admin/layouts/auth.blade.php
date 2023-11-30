<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.meta')
    @include('admin.layouts.styles')
</head>

<body>

    <main class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            @yield('auth')
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