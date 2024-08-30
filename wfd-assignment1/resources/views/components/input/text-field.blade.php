<div>
    @if($attributes->has('label'))
        <label
            for="{{ $id }}"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
        >{{ $label }}</label>
    @endif
    <input
        {{
            $attributes
                ->merge(['type' => 'text'])
                ->class(['shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light'])
                ->except(['label'])
        }}
    />
</div>
