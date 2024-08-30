<div {{
    $attributes
        ->class(['rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800'])
        ->except(['src', 'name'])
    }}>
    <div>

        <img
                class="mx-auto h-36"
                src="{{ $src }}"
                alt=""
        />
    </div>
    <div class="pt-6 text-center">
        <span
                class="text-lg font-semibold leading-tight text-gray-900 dark:text-white"
        >
            {{ $name }}
        </span>

        {{ $slot }}
    </div>
</div>
