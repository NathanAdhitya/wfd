@extends('layouts.base')
@section('title', 'Contact')

@section('content')
    <section class="bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-gray-200">Contact
                Us</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Reach out and
                relive the moments with us. We'd love to hear from you!</p>
            <div class="flex max-md:flex-wrap gap-12">
                <div class="w-full md:w-1/3">
                    <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-gray-200">Want to get in
                        touch?</h2>
                    <ul class="space-y-4 mb-6">
                        <li>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-200">Call us</h3>
                        </li>
                        <li>
                            <x-icon.phone class="inline-block w-6 h-6 mr-2"/>
                            <a href="#" class="hover:underline">021-0000-0000</a>
                        </li>
                    </ul>
                    <ul class="space-y-4 mb-6">
                        <li>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-200">Drop us a message</h3>
                        </li>
                        <li class="flex items-center">
                            <x-icon.whatsapp-glyph class="inline-block w-6 h-6 mr-2"/>
                            <a href="#" class="hover:underline">081-0000-0000 (chat only)</a>
                        </li>
                        <li class="flex items-center">
                            <x-icon.whatsapp-glyph class="inline-block w-6 h-6 mr-2"/>
                            <a href="#" class="hover:underline">081-0000-0000 (chat only)</a>
                        </li>
                        <li class="flex items-center">
                            <x-icon.email class="inline-block w-6 h-6 mr-2"/>
                            <a href="#" class="hover:underline">name@email.com</a>
                        </li>
                    </ul>
                    <ul class="space-y-4 mb-6">
                        <li>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-200">Visit us</h3>
                        </li>
                        <li class="flex items-center">
                            <x-icon.map class="inline-block w-6 h-6 mr-2 mb-auto"/>
                            <a href="#" class="hover:underline w-full">Jl. Pakubuwono VI No. 107 RT 11/RW 2, Gunung,
                                Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12120</a>
                        </li>
                    </ul>
                </div>
                <form action="#" class="space-y-8 block w-full md:w-2/3">
                    <h2 class="mb-4 text-2xl font-extrabold text-gray-900 dark:text-gray-200">Still need help?</h2>
                    <x-input.text-field label="Your email" id="email" placeholder="name@email.com" required/>
                    <x-input.text-field
                        label="Subject"
                        id="subject"
                        placeholder="Let us know how we can help you"
                        required
                    />

                    <div class="sm:col-span-2">
                        <x-input.textarea label="Your message" id="message" rows="6" placeholder="Leave a message..."/>
                    </div>
                    <button
                        type="submit"
                        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                    >Send message
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
