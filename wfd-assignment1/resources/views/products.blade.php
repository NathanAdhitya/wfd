@extends('layouts.base')
@section('title', 'Products')

@section('content')
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <div>
                    <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">
                        Blewah Mewah Series
                    </h2>
                </div>
            </div>
            <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
                <x-product-card
                    src="{{ Vite::asset('resources/images/products/sku01.webp') }}"
                    name="Blewah Tea with Blewah Jelly"
                />
                <x-product-card src="{{ Vite::asset('resources/images/products/sku02.webp') }}" name="Blewah Aerocano"/>
                <x-product-card src="{{ Vite::asset('resources/images/products/sku03.webp') }}" name="Blewah Latte"/>
                <x-product-card
                    src="{{ Vite::asset('resources/images/products/sku04.webp') }}"
                    name="Oatside Blewah Latte"
                />
            </div>
        </div>
    </section>

    <section class="bg-gray-50 pb-8 antialiased dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
                <div>
                    <h2 class="mt-3 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">
                        Kopi Kenangan Series
                    </h2>
                </div>
            </div>
            <div class="mb-4 flex flex-wrap gap-6">
                <x-product.short-table product-category="Coffee">
                    <x-product.entry name="Kopi Kenangan Mantan" price-l="19" price-r="25"/>
                    <x-product.entry name="Kopi Kenangan Mantan Boba" price-l="25" price-r="31"/>
                    <x-product.entry name="Americano" price-l="15" price-r="20"/>
                    <x-product.entry name="Avocado Coffee" price-l="28" price-r="38"/>
                    <x-product.entry name="Caramel Macchiato" price-l="28" price-r="38"/>
                    <x-product.entry name="Cappuccino" price-l="22" price-r="29"/>
                    <x-product.entry name="Dua Shot Iced Shaken" price-l="28" price-r="38"/>
                    <x-product.entry name="Kopi Dolce" price-l="22" price-r="29"/>
                </x-product.short-table>

                <x-product.short-table product-category="Milk Tea">
                    <x-product.entry name="Earl Grey Milk Tea Boba" price-l="23" price-r="29"/>
                    <x-product.entry name="Hazelnut Choco Milk Tea Boba" price-l="26" price-r="34"/>
                    <x-product.entry name="Milk Tea Boba" price-l="23" price-r="29"/>
                    <x-product.entry name="Thai Tea / Thai Green Tea" price-r="22"/>
                </x-product.short-table>
            </div>
        </div>
    </section>
    <section class="bg-gray-50 pb-8 antialiased dark:bg-gray-900">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <p class="text-primary-700 dark:text-primary-300 text-sm font-semibold">
                *Harga dapat mengikuti lokasi dan waktu
            </p>
        </div>
    </section>

    <svg class="hidden">
        <filter id="wavy2">
            <feTurbulence x="0" y="0" baseFrequency="0.02" numOctaves="5" seed="1"/>
            <feDisplacementMap in="SourceGraphic" scale="20"/>
        </filter>
    </svg>
@endsection
