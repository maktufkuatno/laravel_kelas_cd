<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset-"UTF-8">
    <meta name-"viewport content-"width-device-width, initial-sclae-1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</heaad>
<boody>
    @include('layouts.navbar')
    <div class="container-fluid">
        <div class="row mt-1">
            <div class="col-md-2">
                @include('layouts.sidebar')  
            </div>
            <div class="col-md-10">
                @include('layouts.breadcrumd')
                @yield('content')
            </div>
    </div>
</body>
</html>
