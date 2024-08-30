<figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 md:p-12 dark:bg-gray-800">
    <blockquote class="mx-auto max-w-2xl text-gray-500 dark:text-gray-400">
        <p class="my-4">{{ $slot }}</p>
    </blockquote>
    <figcaption class="flex justify-center items-center space-x-3">
        {{ $image }}
        <div class="space-y-0.5 font-medium dark:text-white text-left">
            <div>{{ $attributes->get('user-name') }}</div>
            <div class="text-sm font-light text-gray-500 dark:text-gray-400">{{ $attributes->get('testimonial-source') }}</div>
        </div>
    </figcaption>
</figure>
