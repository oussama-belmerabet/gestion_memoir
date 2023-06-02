<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Gestion Memoir') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
    </head>
    <body class="font-sans ">
        @inertia
        <div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
            <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
              <svg class="absolute left-0 hidden h-full text-white transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
                <path d="M50 0H100L50 100H0L50 0Z"></path>
              </svg>
              <img
                class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
                src="{{ asset('paper/img/header.jpg') }}?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"

                alt=""
              />
            </div>
            <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
              <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">

                <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                  Fun d'Étud: <br class="hidden md:block" />
                  A Memoir Management Project
                  <span class="inline-block text-deep-purple-accent-400">is real</span>
                </h2>
                <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">
                        Rejoignez-nous dans cette aventure mémorable et inspirante en tant qu'étudiants.
                </p>
                <div class="flex items-center">
                  <a
                    href="/profile"
                    class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-green-700 transition duration-200 rounded shadow-lg border border-gray-600  bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                  >
                    Get started
                  </a>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>
