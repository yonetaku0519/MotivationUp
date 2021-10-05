<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
 
<body>
    <div id="app">
        <router-view></router-view>
    </div>
</body>
 
</html>