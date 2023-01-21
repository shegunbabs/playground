<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="your, tags"/>
    <meta name="description" content="150 words"/>
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow"/>
    <meta name="author" content="name, email@hotmail.com">
    <meta name="designer" content="">
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Challenge Landing Page</title>
    @vite(['resources/css/app.css'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
<div x-data="{mobileMenuOpen: false, showPattern: false}" class="relative overflow-hidden bg-gray-800">
        <div x-data="{showPattern: true}" class="hidden sm:absolute sm:inset-0 sm:block" aria-hidden="true">
            <svg x-cloak x-show="showPattern" class="absolute bottom-0 right-0 mb-48 translate-x-1/2 transform text-blue-800 lg:top-0 lg:mt-28 lg:mb-0 xl:translate-x-0 xl:transform-none" width="464" height="484" viewBox="0 0 364 384" fill="none">
                <defs>
                    <pattern id="eab71dd9-9d7a-47bd-8044-256344ee00d0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="364" height="384" fill="url(#eab71dd9-9d7a-47bd-8044-256344ee00d0)" />
            </svg>
        </div>
    <div class="relative pb-16 sm:pb-24">
        <div class="bg-gray-50 py-3">
            <nav class="relative mx-auto flex max-w-7xl items-center justify-between px-6" aria-label="Global">
                <div class="flex flex-1 items-center">
                    <div class="flex w-full items-center justify-between md:w-auto">
                        <a href="#">
                            <span class="sr-only"></span>
                            <x-logo alt="Best Western Logo" />
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button @click="mobileMenuOpen = true" type="button" class="focus-ring-inset inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-white" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <!-- Heroicon name: outline/bars-3 -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="hidden space-x-10 md:ml-10 md:flex text-gray-900">
                        <a href="#" class="font-medium hover:text-gray-700">About</a>

                        <a href="#" class="font-medium hover:text-gray-700">Services</a>

                        <a href="#" class="font-medium hover:text-gray-700">Gallery</a>

                        <a href="#" class="font-medium hover:text-gray-700">Careers</a>
                    </div>
                </div>
                <div class="hidden md:flex">
                    <a href="#" class="inline-flex items-center rounded-md border border-transparent bg-gray-600 px-4 py-2 text-sm font-medium text-white hover:bg-gray-700">Log in</a>
                </div>
            </nav>

            <!--
              Mobile menu, show/hide based on menu open state.

              Entering: "duration-150 ease-out"
                From: "opacity-0 scale-95"
                To: "opacity-100 scale-100"
              Leaving: "duration-100 ease-in"
                From: "opacity-100 scale-100"
                To: "opacity-0 scale-95"
            -->
            <div x-cloak x-show="mobileMenuOpen"
                 x-transition:enter="duration-150 ease-out"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="duration-100 ease-in"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="absolute inset-x-0 top-0 z-10 origin-top-right transform p-2 transition md:hidden">
                <div class="overflow-hidden rounded-lg bg-white shadow-md ring-1 ring-black ring-opacity-5">
                    <div class="flex items-center justify-between px-5 pt-4">
                        <div>
                            <x-logo class="h-8 w-auto" alt="Best Western Logo" />
                        </div>
                        <div class="-mr-2">
                            <button @click="mobileMenuOpen = false" type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x-mark -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="space-y-1 px-2 pt-2 pb-3">
                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">About</a>

                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Services</a>

                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Gallery</a>

                        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900">Careers</a>
                    </div>
                    <a href="#" class="block w-full bg-gray-50 px-5 py-3 text-center font-medium text-indigo-600 hover:bg-gray-100">Log in</a>
                </div>
            </div>
        </div>

        <main class="mt-16 sm:mt-24">
            <div class="mx-auto max-w-7xl">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div class="px-6 sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">
                        <div>
                            <div class="hidden sm:mb-4 sm:flex sm:justify-center lg:justify-start">
                                <a href="#" class="flex items-center rounded-full bg-gray-900 p-1 pr-2 text-white hover:text-gray-200 sm:text-base lg:text-sm xl:text-base">
                                    <span class="rounded-full bg-blue-500 px-3 py-0.5 text-sm font-semibold leading-5 text-white">We're hiring</span>
                                    <span class="ml-4 text-sm">Visit our careers page</span>
                                    <!-- Heroicon name: mini/chevron-right -->
                                    <svg class="ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">Pledge to health</h1>
                            <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                This is a good step to choosing good health. <br>The Pledge To Health Challenge is a 4-weeks
                                challenge to help you build healthy habits that will impact your overall health.
                                Whatever your health goals are, you can build on these daily habits.
                            </p>
                            <p class="font-semibold text-white mt-4">What is it about</p>
                            <div class="text-gray-50">
                                Complete basic healthy habits each day and these habits will cover:
                            </div>
                            <ul class="text-white grid grid-cols-2 gap-2 list-disc ml-4 mt-2">
                                <li>Mindfulness</li>
                                <li>Diet</li>
                                <li>Hygration</li>
                                <li>Sleep</li>
                                <li>Exercise</li>
                            </ul>
                            <p class="mt-8 text-base font-semibold text-white sm:mt-10">Endorsed by</p>
                            <div class="mt-5 w-full sm:mx-auto sm:max-w-lg lg:ml-0">
                                <div class="flex flex-wrap items-start justify-between">
                                    <div class="flex justify-center px-1">
                                        <img class="h-9 sm:h-10" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                                    </div>
                                    <div class="flex justify-center px-1">
                                        <img class="h-9 sm:h-10" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation">
                                    </div>
                                    <div class="flex justify-center px-1">
                                        <img class="h-9 sm:h-10" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-16 sm:mt-24 lg:col-span-6 lg:my-auto">
                        <div class="bg-white sm:mx-auto sm:w-full sm:max-w-md sm:overflow-hidden sm:rounded-lg">
                            <div class="px-6 py-8 sm:px-10">
                                <div>
                                    <p class="text-sm font-medium text-gray-700">
                                        Fill this form to get your guide. <br>
                                        We will deliver it straight to your inbox</p>
                                </div>

                                <div class="mt-6">
                                    <form action="#" method="POST" class="space-y-6">
                                        <div>
                                            <label for="name" class="sr-only">Full name</label>
                                            <input type="text" name="name" id="name" autocomplete="name" placeholder="Full name" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>

                                        <div>
                                            <label for="mobile-or-email" class="sr-only">Email</label>
                                            <input type="text" name="mobile-or-email" id="mobile-or-email" autocomplete="email" placeholder="Mobile number or email" required class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                        <div>
                                            <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create your account</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="border-t-2 border-gray-200 bg-gray-50 px-6 py-6 sm:px-10">
                                <p class="text-xs leading-5 text-gray-500">By signing up, you agree to our <a href="#" class="font-medium text-gray-900 hover:underline">Terms</a>, <a href="#" class="font-medium text-gray-900 hover:underline">Data Policy</a> and <a href="#" class="font-medium text-gray-900 hover:underline">Cookies Policy</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>
