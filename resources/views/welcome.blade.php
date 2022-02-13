<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ Str::of(config('app.name'))->upper() }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fonts -->
</head>

<body class="antialiased m-0 p-0">
    <nav class="flex flex-col w-full">
        <div class="w-full hidden sm:flex bg-white justify-between px-10 md:px-20 py-2">
            <div>Logo</div>
            <div class="flex items-center justify-end space-x-5 text-xs">
                <a href="">Phone</a>
                <a href="">Email</a>
                <a href="">
                    <address>Address</address>
                </a>
            </div>
        </div>
        <div
            class="w-full bg-zinc-800 py-5 text-base text-white font-medium flex items-center justify-between px-10 md:px-20">
            <div class="flex items-center justify-start space-x-5 md:space-x-10">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Services</a>
                <a href="">Contact</a>
            </div>
            <button
                class="bg-green-600 text-xs font-semibold tracking-wider px-4 py-2 text-white  rounded-lg hover:bg-green-700">
                Join Us
            </button>
        </div>
    </nav>
    <header class="">
        <div class="py-28 flex flex-col px-10 md:px-20 w-full sm:w-3/4 md:w-2/3 space-y-10">
            <h1 class="capitalize font-semibold text-4xl md:text-5xl">Well Rooted in Nature</h1>
            <p class="text-sm tracking-wide font-medium text-gray-500">
                Ann Maries Gallery Limited provides the best quality and affordable cosmetics raw materials and food
                commodities to every small and medium enterprises in both Local and International markets.
            </p>

            <div class="flex space-x-5">
                <button
                    class="px-3 py-2 rounded-lg hover:bg-opacity-80 bg-green-600 text-sm font-medium text-white F">Contact
                    Us</button>
                <button class="px-3 py-2 rounded-lg  bg-white text-sm font-medium">Read More</button>
            </div>

        </div>
    </header>
    <section
        class="px-10 md:px-20 py-16 flex flex-col  sm:grid bg-green-600 sm:grid-cols-4 gap-5 text-white items-center justify-start">
        <div class="sm:col-span-1 sm:border-l-8 sm:border-white-600 px-5 sm:h-full flex items-center">
            <h2 class="font-semibold text-lg">About Us</h2>
        </div>
        <p class="h-full col-span-3 font-normal text-justify">
            Ann-Maries Gallery Limited is a corporate entity that engages in sourcing, buying, sorting, cleaning,
            grading, packaging, and marketing of a wide range of Nigerian Grown Commodities such as; Shea Butter,
            Ginger, Sesame Seed, and Grains for domestic markets, and Exports. While empowering buyers with expensive
            market and intelligence for better decision making
        </p>
    </section>
    <section class="relative py-10 px-10 md:px-20 bg-lime-500 text-white flex flex-col space-y-2">
        <h2 class="capitalize text-xl">Our statistics</h2>
        <p>
            Our Acchivement in the journey depicted in numbers
        </p>
        {{-- <div class="border py-6 absolute -bottom-32 left-10 md:left-20 right-10 md:right-20">
            <x-hexagon></x-hexagon>
        </div> --}}
    </section>
    <section class="sm:px-10 md:px-20 sm:py-10 relative overflow-hidden">
        <div class="w-full relative overflow-hidden">
            <div class="absolute hidden sm:block h-32 w-32 rounded-full -top-16 -left-16 bg-green-600"></div>
            <div class="absolute hidden sm:block h-32 w-32 rounded-full -bottom-16 -right-16 bg-green-600"></div>
            <div class="py-10 md:px-12 flex items-start flex-col justify-center">
                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-20 w-full">
                    <div class="rounded-lg md:px-20">
                        <img src="{{ asset('images/img-1.jpg') }}" class="sm:rounded-lg w-full lg:h-full object-cover"
                            alt="" srcset="">
                    </div>
                    <div
                        class="flex flex-col items-center justify-center px-12 py-12 lg:py-36 lg:px-24 font-medium text-base">
                        <h2 class="uppercase font-medium text-lg text-gray-700 mb-5">Our Vision</h2>
                        <p>
                            To deliver the best quality commodities oustanding customer
                            service and brilliant experience through our superior best practice service delivery and
                            unique
                            human resource expertise
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-20">
                    <div
                        class="flex flex-col items-center justify-center px-12 py-12 lg:py-36 lg:px-24 font-medium text-base">
                        <h2 class="uppercase font-medium text-lg text-gray-700 mb-5">Our Vision</h2>
                        <p>
                            To deliver the best quality commodities oustanding customer
                            service and brilliant experience through our superior best practice service delivery and
                            unique
                            human resource expertise
                        </p>
                    </div>
                    <div class="rounded-lg md:px-20">
                        <img src="{{ asset('images/img-1.jpg') }}" class="sm:rounded-lg w-full lg:h-full object-cover"
                            alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full">
        <div
            class="bg-gray-800 bg-opacity-50 text-white flex flex-col items-center justify-center space-y-10 py-20 px-10 md:px-20">
            <h2 class="font-semibold text-lg ">Our Influence</h2>
            <p class="text-center">
                We enhance sustainablity rural development that enable woman and youths to be self sufficient and
                contribute to global economy
            </p>
        </div>
    </section>
    <section class="px-10 py-20 sm:px-20 flex flex-col items-center justify-center space-y-10">
        <h2 class="font-semibold text-lg">Why Us</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            <x-reason></x-reason>
            <x-reason></x-reason>
            <x-reason></x-reason>
            <x-reason></x-reason>
            <x-reason></x-reason>
            <x-reason></x-reason>
        </div>
    </section>
    <section class="flex flex-col items-center justify-center space-y-10 w-full">
        <h2 class="font-semibold text-lg">Our Project</h2>
        <div class="w-full swiper mySwipper">
            <ul class="block w-full h-72 border swiper-wrapper">
                <li class="w-full h-full swiper-slide">
                    <img src="{{ asset('images/img-1.jpg') }}" class="object-cover w-full h-full" alt="">
                </li>
                <li class="w-full h-full swiper-slide">
                    <img src="{{ asset('images/img-1.jpg') }}" class="object-cover w-full h-full" alt="">
                </li>
            </ul>
        </div>
    </section>
    <section class="w-full bg-green-600">
        <div class="px-10 sm:px-20 py-20">
            <h2 class="font-semibold text-lg text-white">Reviews</h2>
            <div class="pt-10">
                <x-testimonial></x-testimonial>
            </div>
        </div>
    </section>
    <footer>
        <div class="px-10 sm:px-20 grid grid-cols-1 md:grid-cols-3">
            <div>

            </div>
            <div>

            </div>
            <div>

            </div>
        </div>
        <div class="flex items-end justify-center border-t
        32564">

        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
