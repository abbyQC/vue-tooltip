<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100vh;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<title>Laravel</title>

<body>
    <div id="app">
        <p>
            Hello there, <span data-tooltip="I am Chang">Hover over me </span>
        </p>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>