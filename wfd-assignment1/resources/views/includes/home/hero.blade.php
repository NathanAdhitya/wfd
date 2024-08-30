<section
        class="bg-gray-100 py-8 antialiased dark:bg-gray-900 md:py-16 bg-repeat bg-contain bg-fixed"
        style="background-image: url({{ Vite::asset('resources/images/coffee.svg') }});"
>
    <div class="mx-auto grid max-w-screen-xl px-4 pb-8 md:grid-cols-12 lg:gap-12 lg:pb-16 xl:gap-0">
        <div class="content-center justify-self-start md:col-span-7 md:text-start">
            <a
                    href="{{ route('products') }}"
                    class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 drop-shadow"
                    role="alert"
            >
                <span class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">PROMO</span> <span
                        class="text-sm font-medium"
                >Pesta Cashback 30%! Lihat promo</span>
                <svg
                        class="ml-2 w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                            fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                    ></path>
                </svg>
            </a>

            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-white md:max-w-2xl md:text-5xl xl:text-6xl">
                Kopi Kenangan</h1>
            <p class="mb-4 max-w-2xl text-gray-700 dark:text-gray-300 md:text-lg lg:text-xl">Savouring
                memories every sip.</p>
            <p class="mb-4 max-w-2xl text-gray-700 dark:text-gray-300 md:mb-6 md:text-lg lg:text-xl">High quality
                coffee. Locally-sourced ingredients. Freshly roasted every morning.</p>
            <a
                    href="#"
                    class="inline-block rounded-lg bg-red-700 px-6 py-3.5 text-center font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
            >Get the App</a>

            <div class="flex gap-6 mt-6">
                <img
                        src="{{ Vite::asset('resources/images/halal-white.png') }}"
                        alt="Halal"
                        class="w-auto h-20 invert dark:invert-0"
                />
                <img
                        src="{{ Vite::asset('resources/images/wba-white.png') }}"
                        alt="Brand of the year"
                        class="w-auto h-20 invert dark:invert-0"
                />
            </div>
        </div>
        <div class="hidden md:col-span-5 md:mt-0 md:flex">
            <x-animated-coffee class="w-full"/>
        </div>
    </div>
    <div class="px-4 mx-auto grid max-w-screen-xl text-gray-800 dark:text-gray-200">
        <a href="#" class="block font-medium">Find Outlets ></a>
    </div>
</section>
