<html>
<head>

    @if($seo)
    {{ $seo->toHtml() }}
    @else
    <title>ITB Swiss | Trading around the world</title>
    @endif

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