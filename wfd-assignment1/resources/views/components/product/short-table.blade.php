<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-lg text-primary-700 bg-gray-100 dark:bg-gray-700 dark:text-primary-400">
    <tr>
        <th scope="col" class="px-6 py-2 w-full">
            {{ $attributes->get('product-category') }}
        </th>
        <th scope="col" class="px-6 py-2">
            R
        </th>
        <th scope="col" class="px-6 py-2">
            L
        </th>
    </tr>
    </thead>

    <tbody>
    {{ $slot }}
    </tbody>
</table>
