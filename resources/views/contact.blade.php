<x-layout title="Contact — My Laravel App">
    <x-page-shell eyebrow="Contact" title="Let’s talk about your project">
        <p class="max-w-2xl">
            Get in touch with us for inquiries, collaborations, or support. We’re here to help.
        </p>
        <dl class="mt-10 grid gap-4 sm:grid-cols-2">
            <div class="rounded-2xl border border-slate-100 bg-gradient-to-br from-slate-50 to-white p-5 ring-1 ring-slate-100/80">
                <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Email</dt>
                <dd class="mt-2">
                    <a href="mailto:hello@example.com" class="font-semibold text-teal-700 underline decoration-teal-200 underline-offset-2 hover:decoration-teal-500">hello@example.com</a>
                </dd>
            </div>
            <div class="rounded-2xl border border-slate-100 bg-gradient-to-br from-slate-50 to-white p-5 ring-1 ring-slate-100/80">
                <dt class="text-xs font-semibold uppercase tracking-wide text-slate-500">Hours</dt>
                <dd class="mt-2 font-semibold text-slate-900">Mon–Fri · 9:00–17:00</dd>
                <dd class="mt-1 text-sm text-slate-500">Your timezone here</dd>
            </div>
        </dl>
    </x-page-shell>
</x-layout>
