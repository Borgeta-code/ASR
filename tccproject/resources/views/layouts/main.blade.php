<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- CSS Bootstrap --}}

    {{-- CSS da aplicação --}}
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    @yield('content')

    {{-- Seção final com o rodapé da página --}}
    <footer>
        &copy; Todos os direitos reservados
    </footer>

    <script src="/js/scriptIndex.js" defer></script>
</body>

</html>