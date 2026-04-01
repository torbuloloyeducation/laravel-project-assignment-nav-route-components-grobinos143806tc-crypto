<x-layout title="Blog — My Laravel App">
    <div class="rounded-2xl border border-slate-200/80 bg-white p-8 shadow-sm shadow-slate-200/50 sm:p-10">
        <p class="text-sm font-medium uppercase tracking-wider text-indigo-600">Blog</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
            Latest posts
        </h1>
        <p class="mt-4 max-w-2xl leading-relaxed text-slate-600">
            A static listing for the assignment. Later you can replace this with Eloquent models and pagination.
        </p>
        <div class="mt-8 space-y-4">
            @foreach ([
                ['title' => 'Getting started with Blade components', 'date' => 'Apr 1, 2026', 'iso' => '2026-04-01'],
                ['title' => 'Named routes and readable URLs', 'date' => 'Mar 28, 2026', 'iso' => '2026-03-28'],
                ['title' => 'Why Route::view() fits static pages', 'date' => 'Mar 15, 2026', 'iso' => '2026-03-15'],
            ] as $post)
                <article class="flex flex-col gap-1 rounded-xl border border-slate-100 bg-slate-50/50 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">
                    <h2 class="font-semibold text-slate-900">{{ $post['title'] }}</h2>
                    <time class="text-sm text-slate-500" datetime="{{ $post['iso'] }}">{{ $post['date'] }}</time>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>
