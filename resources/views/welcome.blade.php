<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="/css/grid.css"> -->
    <link rel="stylesheet" href="/css/all.css">


    <title>Dashboard</title>

</head>

<body>
    <div id="app">
        <main-app />
    </div>
</body>
<script src="{{mix('/js/app.js')}}"></script>

</html>