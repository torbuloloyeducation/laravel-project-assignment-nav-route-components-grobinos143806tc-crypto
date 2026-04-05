@php
    $links = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Contact', 'route' => 'contact'],
        ['label' => 'Services', 'route' => 'services'],
        ['label' => 'Showcases', 'route' => 'showcases'],
        ['label' => 'Blog', 'route' => 'blog'],
        ['label' => 'Emails', 'route' => 'emails'],
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-slate-800/80 bg-slate-950/95 shadow-lg shadow-slate-950/20 backdrop-blur-md">
    <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-4 px-4 py-3.5 sm:px-6">
        <a href="{{ route('emails') }}" class="group flex items-center gap-3 rounded-lg outline-offset-4 focus-visible:outline focus-visible:outline-2 focus-visible:outline-teal-400">
            <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-teal-400 to-emerald-600 text-sm font-bold text-white shadow-md shadow-teal-900/40 ring-1 ring-white/20 transition group-hover:scale-[1.02]">
                L
            </span>
            <span class="text-left">
                <span class="block text-sm font-semibold tracking-tight text-white">My Laravel App</span>
                <span class="block text-xs text-slate-500">Navigation demo</span>
            </span>
        </a>
        <nav class="flex flex-wrap items-center justify-center gap-1 sm:justify-end sm:gap-0.5" aria-label="Primary">
            @foreach ($links as $link)
                @php
                    $active = request()->routeIs($link['route']);
                @endphp
                <a
                    href="{{ route($link['route']) }}"
                    @class([
                        'relative rounded-lg px-3 py-2 text-sm font-medium transition-all',
                        'text-white after:absolute after:inset-x-2 after:bottom-1 after:h-0.5 after:rounded-full after:bg-teal-400' => $active,
                        'text-slate-400 hover:bg-slate-800/80 hover:text-white' => ! $active,
                    ])
                    @if ($active) aria-current="page" @endif
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>
    </div>
</header>
