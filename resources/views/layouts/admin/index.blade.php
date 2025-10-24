<!DOCTYPE html>

<html class="h-[100dvh] bg-[var(--color-bg-admin)]">
    <head>
        <title>Admin panel - @yield('title')</title>

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
        @include('components.base.admin.header')

        <main class="grid grid-cols-[300px_auto] gap-[var(--gap-default)]">
            <div class="bg-[var(--color-block)] p-[var(--p-default)]">
                @include('components.nav.admin.sidebar')
            </div>
            
            <div class="bg-[var(--color-block)] p-[var(--p-default)]">
                @yield('content')
            </div>
        </main>

        @include('components.base.footer')
    </body>
</html>