<!DOCTYPE html>
<html>

<head>
   @include('partials.head')
</head>
<body>
<div class="main-wrapper">
    <div class="header">
       @include('partials.header')
    </div>
    <div class="sidebar" id="sidebar">
        @include('partials.sidebar')
    </div>
    <div class="page-wrapper">
        @yield('content')
        @include('partials.notification')
    </div>
</div>
<div class="sidebar-overlay" data-reff="#sidebar"></div>
@include('partials.js')
</body>


</html>
