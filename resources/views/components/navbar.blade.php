@php
    $links = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Contact', 'route' => 'contact'],
        ['label' => 'Services', 'route' => 'services'],
        ['label' => 'Showcases', 'route' => 'showcases'],
        ['label' => 'Blog', 'route' => 'blog'],
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/90 backdrop-blur-md">
    <div class="mx-auto flex max-w-5xl flex-wrap items-center justify-between gap-4 px-4 py-4 sm:px-6">
        <a href="{{ route('home') }}" class="text-lg font-semibold tracking-tight text-slate-900">
            My Laravel App
        </a>
        <nav class="flex flex-wrap items-center gap-1 sm:gap-2" aria-label="Primary">
            @foreach ($links as $link)
                @php
                    $active = request()->routeIs($link['route']);
                @endphp
                <a
                    href="{{ route($link['route']) }}"
                    @class([
                        'rounded-lg px-3 py-2 text-sm font-medium transition-colors',
                        'bg-indigo-600 text-white shadow-sm' => $active,
                        'text-slate-600 hover:bg-slate-100 hover:text-slate-900' => ! $active,
                    ])
                    @if ($active) aria-current="page" @endif
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>
    </div>
</header>
