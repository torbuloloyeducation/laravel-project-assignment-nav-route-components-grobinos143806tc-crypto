<x-layout title="Services — My Laravel App">
    <div class="rounded-2xl border border-slate-200/80 bg-white p-8 shadow-sm shadow-slate-200/50 sm:p-10">
        <p class="text-sm font-medium uppercase tracking-wider text-indigo-600">Services</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
            We offer
        </h1>
        <p class="mt-4 max-w-2xl leading-relaxed text-slate-600">
            Outline your offerings here. Each route uses the same layout; only the main content in the slot changes.
        </p>
        <ul class="mt-8 space-y-3">
            @foreach (['Consulting', 'Development', 'Support'] as $item)
                <li class="flex items-center gap-3 rounded-xl border border-slate-100 bg-slate-50/80 px-4 py-3">
                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-indigo-100 text-indigo-700">✓</span>
                    <span class="font-medium text-slate-900">{{ $item }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
