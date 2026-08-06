@props([
    'title',
    'desc' => '',
])

<div {{ $attributes->merge(['class' => 'rounded-md border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]']) }}>
    <!-- Card Header -->
    <div class="px-6 py-5">
        <h3 class="card-title text-gray-800 dark:text-white/90">
            {{ $title }}
        </h3>
        @if($desc)
            <p class="card-description mt-1 text-gray-500 dark:text-gray-400">
                {{ $desc }}
            </p>
        @endif
    </div>

    <!-- Card Body -->
    <div class="p-4 border-t border-gray-100 dark:border-gray-800 sm:p-6">
        <div class="space-y-6">
            {{ $slot }}
        </div>
    </div>
</div>
