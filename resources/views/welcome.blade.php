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
            hello,
            <span data-tooltip="Chang!! Hello there">
                there
            </span>
        </p>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>