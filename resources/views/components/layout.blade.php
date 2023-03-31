<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test - {{$title ?? ''}}</title>
    <meta name="description" content="{{$metaDescription ?? 'Default meta description'}}"/>
</head>
<body>
    {{ $slot }}
    <x-layouts.navigation />
</body>
</html>