<x-layout title="Home — My Laravel App">
    <x-page-shell eyebrow="Welcome" title="Start Building">
        <p class="max-w-2xl text-lg text-slate-600">
            This demo uses Blade layouts, anonymous components, and <code>Route::view()</code> <br>
            so each page stays simple while the shell stays consistent.
        </p>
        <div class="mt-10 flex flex-wrap gap-3">
            <a
                href="{{ route('contact') }}"
                class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-teal-500 to-emerald-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-teal-600/25 transition hover:brightness-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-500"
            >
                Get in touch
            </a>
            <a
                href="{{ route('services') }}"
                class="inline-flex items-center justify-center rounded-xl border border-slate-200 bg-white px-5 py-2.5 text-sm font-semibold text-slate-800 shadow-sm transition hover:border-slate-300 hover:bg-slate-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-400"
            >
                View services
            </a>
        </div>
        <dl class="mt-12 grid gap-4 border-t border-slate-100 pt-10 sm:grid-cols-3">
            <div class="rounded-2xl bg-slate-50/80 p-4 ring-1 ring-slate-100">
                <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Routes</dt>
                <dd class="mt-1 text-2xl font-bold text-slate-900">6</dd>
                <dd class="mt-0.5 text-xs text-slate-500">Named <code>Route::view()</code></dd>
            </div>
            <div class="rounded-2xl bg-slate-50/80 p-4 ring-1 ring-slate-100">
                <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Components</dt>
                <dd class="mt-1 text-2xl font-bold text-slate-900">3</dd>
                <dd class="mt-0.5 text-xs text-slate-500">Layout, navbar, page shell</dd>
            </div>
            <div class="rounded-2xl bg-slate-50/80 p-4 ring-1 ring-slate-100">
                <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Stack</dt>
                <dd class="mt-1 text-lg font-bold text-slate-900">Laravel + Vite</dd>
                <dd class="mt-0.5 text-xs text-slate-500">Tailwind CSS</dd>
            </div>
        </dl>
    </x-page-shell>
</x-layout>
