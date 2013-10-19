<html>
<head>
    <title>index</title>

    {{ Asset::styles() }}

    <link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>

    {{ Asset::scripts() }}

    <noscript>
        <link rel="stylesheet" type="text/css" href="css/nojs.css" />
    </noscript>
</head>
@if(lan()->is('ar'))
<body dir="rtl">
@else
<body>
@endif
<div id="container">

    @include('partials.header')

    {{ $content }}

    @include('partials.footer')

    @yield('scripts')
</div>
</body>
</html>