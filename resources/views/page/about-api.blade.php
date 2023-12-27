@extends('app')
@section('content')
    <div class="flex justify-center mt-20">
        <div class="max-w-5xl w-full">
            <div class="mb-10">
                <h1 class="text-center text-2xl font-semibold">About API Cybertech</h1>
            </div>
            <div id="accordion-open" data-accordion="open">
                <h2 id="accordion-open-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                        aria-controls="accordion-open-body-2">
                        <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>Kenapa di buatnya API ini?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Jadi di buatnya API ini adalah bertujuan untuk
                            melengkapi System dari App Cybertech Absens yang sudah ada.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-3" aria-expanded="false"
                        aria-controls="accordion-open-body-3">
                        <span class="flex items-center">Kontributor Cybertech Absens</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">

                        <ol class="relative border-s border-gray-200 dark:border-gray-700">
                            <li class="mb-10 ms-6">
                                <span
                                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                    <img class="rounded-full shadow-lg"
                                        src="https://avatars.githubusercontent.com/u/108182945?v=4" alt="Fikri" />
                                </span>
                                <div
                                    class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:bg-gray-700 dark:border-gray-600">
                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-300">
                                        <a href="https://github.com/akufikri" class="hover:underline">akufikri</a>
                                        <p>Position : Backend</p>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-10 ms-6">
                                <span
                                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                    <img class="rounded-full shadow-lg"
                                        src="https://avatars.githubusercontent.com/u/113502315?v=4" alt="Fadhellya" />
                                </span>
                                <div
                                    class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-300">
                                        <a href="https://github.com/Fadhellya" class="hover:underline">Fadhellya</a>
                                        <p>Position : Frontend [Flutter Dev]</p>
                                    </div>
                                </div>
                            </li>
                            <li class="ms-6">
                                <span
                                    class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                    <img class="rounded-full shadow-lg"
                                        src="https://avatars.githubusercontent.com/u/72621641?v=4" alt="rasyahroel" />
                                </span>
                                <div
                                    class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:bg-gray-700 dark:border-gray-600">
                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-300">
                                        <a href="https://github.com/rasyahroel" class="hover:underline">
                                            rasyahroel</a>
                                        <p>Position : Backend</p>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <h1 class="text-center text-3xl">Teknology</h1>
                <div class="border-2 h-28 mt-5 p-4 flex justify-center gap-9">
                    <div>
                        <img class="w-12 ms-3 mt-1"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png"
                            alt="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png">
                        <h4>Laravel</h4>
                    </div>
                    <div>
                        <img class="w-20" src="https://download.logo.wine/logo/MySQL/MySQL-Logo.wine.png"
                            alt="https://download.logo.wine/logo/MySQL/MySQL-Logo.wine.png">
                        <h4 class="text-center">MySQL</h4>
                    </div>
                    <div>
                        <img class="w-14" src="https://web-strapi.mrmilu.com/uploads/flutter_logo_470e9f7491.png"
                            alt="https://web-strapi.mrmilu.com/uploads/flutter_logo_470e9f7491.png">
                        <h4>Flutter</h4>
                    </div>
                    <div class="mt-2">
                        <img src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.3c5441fc7a190fb1800d4a5c7f07ba4b1345a9c8.svg"
                            alt="">
                        <h4>Tailwind</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
