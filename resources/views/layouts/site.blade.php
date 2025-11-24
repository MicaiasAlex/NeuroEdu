<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NeuroEdu</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Bootstrap + CSS padrão do Laravel --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">

    {{-- CSS compilado do Laravel (se estiver usando) --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Seu CSS customizado --}}
    <link href="{{ asset('custon.css') }}" rel="stylesheet">
</head>
<body>

    {{-- HEADER --}}
    @include('includes.header')

    {{-- CONTEÚDO DAS PÁGINAS --}}
    <main>
        @yield('content')
<<<<<<< HEAD
        @include('includes.acessibilidade')
=======
>>>>>>> df409ff7dfe1ad5ceb58bec17c235eacd10435aa
    </main>

    {{-- FOOTER --}}
    @include('includes.footer')

    {{-- JS Bootstrap --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<<<<<<< HEAD

    <script src="{{ asset('acessibilidade.js') }}"></script>
=======
>>>>>>> df409ff7dfe1ad5ceb58bec17c235eacd10435aa
</body>
</html>
