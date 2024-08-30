<tr
    {{
        $attributes
            ->class(['text-primary-800 dark:text-primary-200 bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'])
            ->except(['name', 'price-l', 'price-r'])
    }}
>
    <th scope="row" class="px-6 py-2 font-medium whitespace-nowrap">
        {{ $name }}
        {{ $slot }}
    </th>
    <td class="px-6 py-2">
        {{ $attributes->get('price-l') }}
    </td>
    <td class="px-6 py-2">
        {{ $attributes->get('price-r') }}
    </td>
</tr>
