<x-layout title="Blog — My Laravel App">
    <x-page-shell eyebrow="Blog" title="Latest posts">
        <p class="max-w-2xl">
Notes, tutorials, and lessons from building real-world projects.
        </p>
        <div class="mt-10 space-y-3">
            @foreach ([
                ['title' => 'A practical guide to Blade components in Laravel', 'date' => 'Apr 1, 2026', 'iso' => '2026-04-01', 'read' => '5 min'],
                ['title' => 'How named routes make your Laravel URLs cleaner', 'date' => 'Mar 28, 2026', 'iso' => '2026-03-28', 'read' => '4 min'],
                ['title' => 'Why Route::view() fits static pages', 'date' => 'Mar 15, 2026', 'iso' => '2026-03-15', 'read' => '3 min'],
            ] as $post)
                <article class="flex flex-col gap-3 rounded-2xl border border-slate-100 bg-slate-50/40 px-5 py-4 transition hover:border-slate-200 hover:bg-white hover:shadow-sm sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h2 class="font-semibold text-slate-900">{{ $post['title'] }}</h2>
                        <p class="mt-0.5 text-xs text-slate-500">Article · {{ $post['read'] }} read</p>
                    </div>
                    <time class="shrink-0 text-sm font-medium tabular-nums text-slate-500" datetime="{{ $post['iso'] }}">{{ $post['date'] }}</time>
                </article>
            @endforeach
        </div>
    </x-page-shell>
</x-layout>
