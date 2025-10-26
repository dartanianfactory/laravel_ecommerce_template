<!DOCTYPE html>

<html class="h-[100dvh] bg-[var(--color-bg)]">
    <head>
        <title>E-commerce project - @yield('title')</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        @vite([
            'resources/css/app.css',
            'resources/css/root.css',
            'resources/css/custom.css',
            'resources/css/animate.css',
            'resources/js/app.js'
        ])
    </head>
    
    <body class="grid h-full grid-rows-[100px_auto_max-content] p-[var(--p-default)] gap-[var(--gap-default)]">
        @include('components.base.header')

        <main class="grid h-full grid-flow-row gap-[var(--gap-default)] bg-[var(--color-container)] p-[var(--p-default)]">
            @yield('content')
        </main>

        @include('components.base.footer')
    </body>
</html>