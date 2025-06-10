<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$code}} - {{__("publicpages::publicpages.errors.{$code}.title")}}</title>
    <link rel="stylesheet" href="{{asset("assets/vendor/public-pages/style.css")}}">
</head>
<body dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">
<div class="error-container">
    <div class="error-code">{{$code}}</div>
    <div class="divider"></div>
    <div class="error-content {{app()->getLocale() === 'fa' ? "text-right" : ""}}">
        <h1 class="error-title">{{__("publicpages::publicpages.errors.{$code}.title")}}</h1>
        <p class="error-description">{{__("publicpages::publicpages.errors.{$code}.message")}}</p>
    </div>
</div>
</body>
</html>
