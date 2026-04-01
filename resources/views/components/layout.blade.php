@props(['title' => 'My Laravel App'])

<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full bg-gradient-to-b from-slate-50 to-slate-100 text-slate-800 antialiased">
    <div class="flex min-h-full flex-col">
        <x-navbar />
        <main class="mx-auto w-full max-w-5xl flex-1 px-4 py-10 sm:px-6">
            {{ $slot }}
        </main>
        <footer class="border-t border-slate-200/80 bg-white/60 py-6 text-center text-sm text-slate-500">
            <p>&copy; {{ date('Y') }} My Laravel App </p>
        </footer>
    </div>
</body>
</html>
