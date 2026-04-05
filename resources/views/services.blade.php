<x-layout title="Services — My Laravel App">
    <x-page-shell eyebrow="Services" title="What we offer">
        <p class="max-w-2xl">
We build fast, reliable, and user-friendly web applications tailored to your needs.
        </p>
        <ul class="mt-10 space-y-4">
            @foreach ([
                ['title' => 'Consulting', 'body' => 'Architecture, code review, and Laravel best practices for your team.'],
                ['title' => 'Development', 'body' => 'Features, APIs, and polished UI with Blade or a JS stack of your choice.'],
                ['title' => 'Support', 'body' => 'Ongoing maintenance, upgrades, and performance tuning.'],
            ] as $item)
                <li class="flex gap-4 rounded-2xl border border-slate-100 bg-white p-5 shadow-sm ring-1 ring-slate-50 transition hover:border-teal-100 hover:shadow-md hover:ring-teal-100/50 sm:items-start">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-teal-400 to-emerald-600 text-lg text-white shadow-md shadow-teal-600/20">✓</span>
                    <div>
                        <h2 class="text-lg font-semibold text-slate-900">{{ $item['title'] }}</h2>
                        <p class="mt-1 text-sm text-slate-600">{{ $item['body'] }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </x-page-shell>
</x-layout>
