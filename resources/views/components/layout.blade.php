<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('js/app.js') }}"></script>


</head>

<body class="flex h-screen flex-col bg-slate-100 selection:bg-sky-600 selection:text-sky-50 dark:bg-slate-950">
    @include('components.navbar')

    <main class="flex-1 p-4">
        {{ $slot }}
    </main>
</body>

</html>