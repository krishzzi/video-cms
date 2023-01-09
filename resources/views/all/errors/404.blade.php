<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404|{{config('app.name')}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="bg-dark">
<div class="container  bg-dark mt-5 pt-5 text-center">
    <div class="alert alert-danger text-center">
        <h2 class="display-3">404</h2>
        <p class="display-5">Oops! Something is wrong.</p>
    </div>
    <a href="{{config('app.url')}}"><h3 class="text-white">Back to Home</h3></a>
</div>
</body>
</html>
