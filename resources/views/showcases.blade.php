<x-layout title="Showcases — My Laravel App">
    <div class="rounded-2xl border border-slate-200/80 bg-white p-8 shadow-sm shadow-slate-200/50 sm:p-10">
        <p class="text-sm font-medium uppercase tracking-wider text-indigo-600">Showcases</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
            Featured work
        </h1>
        <p class="mt-4 max-w-2xl leading-relaxed text-slate-600">
            Placeholder cards for portfolio or case-study highlights. Swap in real images and links when you connect a database or CMS.
        </p>
        <div class="mt-8 grid gap-4 sm:grid-cols-3">
            @foreach (['Alpha', 'Beta', 'Gamma'] as $name)
                <article class="overflow-hidden rounded-xl border border-slate-100 bg-gradient-to-br from-slate-50 to-white shadow-sm">
                    <div class="aspect-video bg-gradient-to-br from-indigo-100 to-indigo-50"></div>
                    <div class="p-4">
                        <h2 class="font-semibold text-slate-900">Project {{ $name }}</h2>
                        <p class="mt-1 text-sm text-slate-600">Short description of the outcome.</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>
