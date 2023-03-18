<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') 🚀</title>
    <!-- plugins:css -->
    @include('admin.includes.css')
    @yield('css')

</head>
<body>

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.includes.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.includes.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('admin.includes.footer')
        </div>
    </div>
</div>
@include('admin.includes.js')
@yield('js')

</body>
</html>
