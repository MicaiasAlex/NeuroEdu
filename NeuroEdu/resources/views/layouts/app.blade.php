<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeuroEdu</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>
