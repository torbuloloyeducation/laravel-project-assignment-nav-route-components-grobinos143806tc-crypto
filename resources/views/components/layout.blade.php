@props(['title' => 'My Laravel App'])

<!DOCTYPE html>
<html lang="en" class="h-full scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0f172a">
    <meta name="description" content="Laravel demo: Blade layouts, components, and named routes.">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full bg-app-mesh bg-grid-subtle font-sans text-slate-800 antialiased">
    <div class="flex min-h-full flex-col">
        <x-navbar />
        <main class="relative mx-auto w-full max-w-6xl flex-1 px-4 py-10 sm:px-6 sm:py-14">
            {{ $slot }}
        </main>
        <footer class="border-t border-slate-200/80 bg-slate-900/95 text-slate-400">
            <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 px-4 py-8 sm:flex-row sm:px-6">
                <div class="text-center sm:text-left">
                    <p class="text-sm font-medium text-white">My Laravel App</p>
                    <p class="mt-1 text-xs text-slate-500">Blade components · Named routes · Route::view()</p>
                </div>
                <p class="text-xs text-slate-500">&copy; {{ date('Y') }} · Assignment demo</p>
            </div>
        </footer>
    </div>
</body>
</html>
