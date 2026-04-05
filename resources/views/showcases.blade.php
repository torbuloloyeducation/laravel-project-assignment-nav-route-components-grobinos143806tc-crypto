<x-layout title="Showcases — My Laravel App">
    <x-page-shell eyebrow="Showcases" title="What this Laravel app demonstrates">
        <p class="max-w-2xl">
            Three slices of a typical Laravel project: templating with Blade, HTTP routing and forms, and a modern asset pipeline—each maps to something you can click through in this repo.
        </p>
        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                [
                    'tag' => 'Blade',
                    'title' => 'A practical Laravel app, explained',
                    'description' => 'Shared chrome via `x-layout`, `x-navbar`, and `x-page-shell`—slots inject page content while the shell stays DRY.',
                    'hue' => 'from-violet-500/20 to-fuchsia-500/10',
                    'route' => 'home',
                    'link' => 'View welcome page',
                ],
                [
                    'tag' => 'Routes',
                    'title' => 'Three core Laravel concepts in action',
                    'description' => 'POST routes with CSRF tokens, request()->validate(), flash with(), and session-backed state—the same patterns as the email list activity.',
                    'hue' => 'from-teal-500/20 to-cyan-500/10',
                    'route' => 'emails',
                    'link' => 'Open email list',
                ],
                [
                    'tag' => 'Vite',
                    'title' => 'How this Laravel app actually works',
                    'description' => 'The Vite Blade directive loads compiled CSS and JS; Tailwind utilities style Blade without a separate SPA—fast feedback with npm run dev.',
                    'hue' => 'from-amber-500/20 to-orange-500/10',
                    'route' => 'services',
                    'link' => 'See another page',
                ],
            ] as $project)
                <article class="group overflow-hidden rounded-2xl border border-slate-200/80 bg-white shadow-sm ring-1 ring-slate-100 transition hover:-translate-y-0.5 hover:shadow-lg hover:shadow-slate-200/60">
                    <div class="relative aspect-[4/3] overflow-hidden bg-slate-100">
                        <div class="absolute inset-0 bg-gradient-to-br {{ $project['hue'] }}"></div>
                        <div class="absolute inset-0 bg-[linear-gradient(180deg,transparent_50%,rgb(15_23_42_/_0.06)_100%)]"></div>
                        <span class="absolute left-4 top-4 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-slate-700 shadow-sm backdrop-blur-sm">{{ $project['tag'] }}</span>
                    </div>
                    <div class="p-5">
                        <h2 class="text-lg font-semibold text-slate-900 group-hover:text-teal-700">{{ $project['title'] }}</h2>
                        <p class="mt-1 text-sm leading-relaxed text-slate-600">{{ $project['description'] }}</p>
                        <a
                            href="{{ route($project['route']) }}"
                            class="mt-4 inline-flex items-center text-sm font-medium text-teal-600 hover:text-teal-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-500"
                        >
                            {{ $project['link'] }}
                            <svg class="ml-1 h-4 w-4 transition group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </x-page-shell>
</x-layout>
