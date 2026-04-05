@props([
    'eyebrow' => '',
    'title' => '',
])

<section class="relative overflow-hidden rounded-3xl border border-slate-200/70 bg-white/90 p-8 shadow-xl shadow-slate-300/30 backdrop-blur-sm sm:p-10 lg:p-12">
    <div class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-teal-400/15 blur-3xl" aria-hidden="true"></div>
    <div class="pointer-events-none absolute -bottom-20 -left-16 h-56 w-56 rounded-full bg-indigo-400/10 blur-3xl" aria-hidden="true"></div>
    <div class="relative">
        @if ($eyebrow !== '')
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-teal-600">{{ $eyebrow }}</p>
        @endif
        @if ($title !== '')
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl lg:text-[2.5rem] lg:leading-tight">
                {{ $title }}
            </h1>
        @endif
        <div class="mt-6 text-base leading-relaxed text-slate-600 [&_code]:rounded-md [&_code]:bg-slate-100 [&_code]:px-1.5 [&_code]:py-0.5 [&_code]:text-sm [&_code]:font-medium [&_code]:text-slate-800">
            {{ $slot }}
        </div>
    </div>
</section>
