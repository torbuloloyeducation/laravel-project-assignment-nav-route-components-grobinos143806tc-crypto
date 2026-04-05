@php
    $count = count($emails);
    $max = 5;
    $full = $count >= $max;
@endphp

<x-layout title="Email list — My Laravel App">
    <x-page-shell eyebrow="Forms" title="Email list">
       

        <div class="mt-8 space-y-4">
            @if (session('success'))
                <div
                    class="flex items-start gap-3 rounded-2xl border border-emerald-200/80 bg-emerald-50/90 px-4 py-3 text-sm text-emerald-900 shadow-sm"
                    role="status"
                >
                    <span class="mt-0.5 text-emerald-600" aria-hidden="true">✓</span>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if ($full)
                <div
                    class="flex items-start gap-3 rounded-2xl border border-amber-200/80 bg-amber-50/90 px-4 py-3 text-sm text-amber-950 shadow-sm"
                    role="alert"
                >
                    <span class="mt-0.5 text-amber-600" aria-hidden="true">⚠</span>
                    <span>Limit reached ({{ $max }} / {{ $max }}). Delete an email before adding a new one.</span>
                </div>
            @endif

            <form
                method="POST"
                action="{{ route('emails.store') }}"
                class="flex flex-col gap-3 rounded-2xl border border-slate-200/80 bg-slate-50/50 p-4 sm:flex-row sm:items-stretch"
            >
                @csrf
                <label class="sr-only" for="email">Email address</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    placeholder="Enter email address"
                    value="{{ old('email') }}"
                    @disabled($full)
                    class="min-h-11 w-full flex-1 rounded-xl border border-slate-200 bg-white px-4 text-slate-900 shadow-sm placeholder:text-slate-400 focus:border-teal-500 focus:outline-none focus:ring-2 focus:ring-teal-500/20 disabled:cursor-not-allowed disabled:bg-slate-100 disabled:text-slate-500"
                >
                <button
                    type="submit"
                    @disabled($full)
                    class="inline-flex min-h-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-r from-teal-500 to-emerald-600 px-5 text-sm font-semibold text-white shadow-md shadow-teal-600/20 transition hover:brightness-105 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-500 disabled:cursor-not-allowed disabled:opacity-50 disabled:shadow-none"
                >
                    Add email
                </button>
            </form>

            @if (session('error'))
                <div
                    class="flex items-start gap-3 rounded-2xl border border-red-200/80 bg-red-50/90 px-4 py-3 text-sm text-red-950 shadow-sm"
                    role="alert"
                >
                    <span class="mt-0.5 text-red-600" aria-hidden="true">✗</span>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div
                    class="rounded-2xl border border-red-200/80 bg-red-50/90 px-4 py-3 text-sm text-red-950 shadow-sm"
                    role="alert"
                >
                    <p class="font-semibold">Please fix the following:</p>
                    <ul class="mt-2 list-inside list-disc space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="mt-10 border-t border-slate-100 pt-8">
            <div class="flex flex-wrap items-end justify-between gap-4">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Saved</p>
                    <p class="mt-1 text-2xl font-bold tabular-nums text-slate-900">{{ $count }} <span class="text-lg font-semibold text-slate-400">/ {{ $max }}</span></p>
                </div>
                <p class="text-sm text-slate-500">You can save up to 5 emails</p>
            </div>
            <div class="mt-3 h-2 overflow-hidden rounded-full bg-slate-200">
                <div
                    class="h-full rounded-full bg-gradient-to-r from-teal-500 to-emerald-500 transition-all duration-300"
                    style="width: {{ ($count / $max) * 100 }}%"
                ></div>
            </div>
        </div>

        <ul class="mt-8 space-y-3" aria-label="Saved email addresses">
            @forelse ($emails as $i => $email)
                <li class="flex flex-wrap items-center justify-between gap-3 rounded-2xl border border-slate-100 bg-white px-4 py-3 shadow-sm ring-1 ring-slate-50">
                    <span class="min-w-0 break-all font-medium text-slate-900">{{ $email }}</span>
                    <form method="POST" action="{{ route('emails.delete') }}" class="shrink-0">
                        @csrf
                        <input type="hidden" name="index" value="{{ $i }}">
                        <button
                            type="submit"
                            class="rounded-lg border border-slate-200 bg-slate-50 px-3 py-1.5 text-xs font-semibold text-slate-700 transition hover:border-red-200 hover:bg-red-50 hover:text-red-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-400"
                        >
                            Delete
                        </button>
                    </form>
                </li>
            @empty
                <li class="rounded-2xl border border-dashed border-slate-200 bg-slate-50/50 px-6 py-10 text-center text-slate-500">
                    <p class="font-medium text-slate-700">No emails saved yet.</p>
                    <p class="mt-1 text-sm">Add one above to see it listed here.</p>
                </li>
            @endforelse
        </ul>
    </x-page-shell>
</x-layout>
