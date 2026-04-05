<x-layout title="About — My Laravel App">
    <x-page-shell eyebrow="About" title="Who we are">
        <p class="max-w-2xl">
            We care about clear structure and maintainable front-ends. This page is rendered from a named route—no controller boilerplate needed for static HTML.
        </p>
        <ul class="mt-8 grid gap-3 sm:grid-cols-2">
            @foreach (['Blade slots for page content', 'Reusable UI in components', 'Readable URLs via route names'] as $point)
                <li class="flex gap-3 rounded-2xl border border-slate-100 bg-slate-50/60 px-4 py-3 text-slate-800">
                    <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-lg bg-teal-100 text-xs font-bold text-teal-700">✓</span>
                    <span class="text-sm font-medium leading-snug">{{ $point }}</span>
                </li>
            @endforeach
        </ul>
    </x-page-shell>
</x-layout>
