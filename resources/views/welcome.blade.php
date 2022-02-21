<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ Str::of(config('app.name'))->upper() }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
</head>

<body class="p-0 m-0 antialiased bg-green-50 scroll-smooth">
    <nav class="flex flex-col w-full">
        <div class="justify-between hidden w-full px-10 py-2 bg-white sm:flex md:px-20">
            <div class="flex items-center justify-end space-x-5 text-xs">
                <a href="" class="flex items-center space-x-2">
                    <span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </span>
                    <span class="flex flex-col items-start justify-center text-xs font-semibold">
                        <span class="font-bold">info@annmariesgallery.com</span>
                        <span>Send an Email</span>
                    </span>
                </a>
                <a href="" class="flex items-center space-x-2">
                    <span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                    </span>
                    <span class="flex flex-col items-start justify-center text-xs font-semibold">
                        <span class="font-bold">08050229095</span>
                        <span>Call Us</span>
                    </span>
                </a>
                <a href="" class="flex items-center space-x-2">
                    <span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </span>
                    <address class="flex flex-col items-start justify-center text-xs font-semibold">
                        <span class="font-bold capitalize">PLot No, 257 Along 1 (R) 421 Road </span>
                        <span>FHA, Lugbe Estate, Abuja</span>
                    </address>
                </a>
            </div>
        </div>
        <div
            class="flex items-center justify-between w-full px-10 py-5 space-x-1 text-base font-medium text-white bg-zinc-800 md:px-20">
            <div class="flex flex-wrap items-center space-x-1 justify-evenly md:space-x-10 ">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#contact">Contact</a>
            </div>
            <img src="{{ asset('images/logo.png') }}" class="h-10" alt="logo">
        </div>
    </nav>
    <header class="text-white bg-center bg-no-repeat bg-cover"
        style="background-image: url('{{ asset('images/header.jpg') }}')">
        <div class="flex flex-col w-full px-10 space-y-10 py-28 md:px-20 sm:w-3/4 md:w-2/3">
            <h1 class="text-4xl font-bold capitalize md:text-5xl">Well Rooted in Nature</h1>
            <p class="text-sm font-medium tracking-wide text-gray-200">
                Ann Maries Gallery Limited provides the best quality and affordable cosmetics raw materials and food
                commodities to every small and medium enterprises in both Local and International markets.
            </p>

            <div class="flex space-x-5">
                <button
                    class="px-3 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-opacity-80 F">Contact
                    Us</button>
                <button class="px-3 py-2 text-sm font-medium text-green-600 bg-white rounded-lg">Read More</button>
            </div>

        </div>
    </header>
    <section id="about"
        class="flex flex-col items-center justify-start gap-5 px-10 py-16 text-white bg-green-600 md:px-20 sm:grid sm:grid-cols-4">
        <div class="flex items-center px-5 sm:col-span-1 sm:border-l-8 sm:border-white-600 sm:h-full">
            <h2 class="text-lg font-semibold">About Us</h2>
        </div>
        <p class="h-full col-span-3 font-normal text-justify">
            Ann-Maries Gallery Limited is a corporate entity that engages in sourcing, buying, sorting, cleaning,
            grading, packaging, and marketing of a wide range of Nigerian Grown Commodities such as; Shea Butter,
            Ginger, Sesame Seed, and Grains for domestic markets, and Exports. while empowering buyers with extensive
            market intelligence for better decision making.
        </p>
    </section>
    <section id="services" class="relative flex flex-col px-10 py-10 mb-20 space-y-2 text-white md:px-20 bg-lime-500">
        <div class="mb-10">
            <h2 class="text-xl capitalize">Our statistics</h2>
            <p>
                Our Acchivement in the journey depicted in numbers
            </p>
        </div>
        <div class="absolute py-6 -bottom-24 left-10 md:left-20 right-10 md:right-20">
            <div class="flex items-center w-full justify-evenly">
                <x-hexagon>
                    <x-slot name="icon">
                        <img src="{{ asset('images/icons/Group 15542.svg') }}" class="w-full h-full" alt="">
                    </x-slot>
                    <x-slot name="number">1000</x-slot>
                    <x-slot name="title"> Farmers </x-slot>
                </x-hexagon>
                <x-hexagon>
                    <x-slot name="icon">
                        <img src="{{ asset('images/icons/Group 15544.svg') }}" class="w-full h-full" alt="">
                    </x-slot>
                    <x-slot name="number">200</x-slot>
                    <x-slot name="title"> Community Aggregator </x-slot>
                </x-hexagon>
                <x-hexagon>
                    <x-slot name="icon">
                        <img src="{{ asset('images/icons/Group 15547.svg') }}" class="w-full h-full" alt="">
                    </x-slot>
                    <x-slot name="number">40</x-slot>
                    <x-slot name="title"> Warehouses </x-slot>
                </x-hexagon>
            </div>
        </div>
    </section>
    <section class="relative overflow-hidden sm:px-10 md:px-20 sm:py-10">
        <div class="relative w-full overflow-hidden">
            <div class="absolute hidden w-32 h-32 bg-green-600 rounded-full sm:block -top-16 -left-16"></div>
            <div class="absolute hidden w-32 h-32 bg-green-600 rounded-full sm:block -bottom-16 -right-16"></div>
            <div class="flex flex-col items-start justify-center py-10 md:px-12">
                <div class="grid w-full grid-cols-1 lg:grid-cols-2 lg:gap-20">
                    <div class="rounded-lg md:px-20">
                        <img src="{{ asset('images/img-1.jpg') }}"
                            class="object-cover w-full sm:rounded-lg lg:h-full" alt="" srcset="">
                    </div>
                    <div
                        class="flex flex-col items-center justify-center px-12 py-12 text-base font-medium lg:py-36 lg:px-24">
                        <h2 class="mb-5 text-lg font-medium text-gray-700 uppercase">Our Vision</h2>
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
                        class="flex flex-col items-center justify-center px-12 py-12 text-base font-medium lg:py-36 lg:px-24">
                        <h2 class="mb-5 text-lg font-medium text-gray-700 uppercase">Our Values</h2>
                        <p>
                            Keeping our clients and patners satisfied by respecting our service level agreement (SLA)
                            while meeting and exceeding their expectations. The drive for high customer satisfaction has
                            constantly pushed us to be innovative, & delivering suitable solutions to all our clients.
                        </p>
                    </div>
                    <div class="rounded-lg md:px-20">
                        <img src="{{ asset('images/img-2.jpg') }}"
                            class="object-cover w-full sm:rounded-lg lg:h-full" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full bg-center bg-no-repeat bg-cover"
        style="background-image: url('{{ asset('images/influence.jpg') }}')">
        <div
            class="flex flex-col items-center justify-center px-10 py-20 space-y-10 text-white bg-gray-800 bg-opacity-50 md:px-20">
            <h2 class="text-lg font-semibold ">Our Influence</h2>
            <p class="max-w-md text-center">
                We enhance sustainability in rural development that enables women and youths to be self sufficient, and
                contribute to global economy.
            </p>
        </div>
    </section>
    <section class="flex flex-col items-center justify-center px-10 py-20 space-y-10 sm:px-20">
        <h2 class="text-lg font-semibold">Why Us</h2>
        <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 md:grid-cols-3">
            <x-reason>
                <x-slot name="icon">
                    <img src="{{ asset('images/icons/Group 15587.svg') }}" alt="">
                </x-slot>
                <x-slot name="title">
                    Bulk Sales
                </x-slot>
                <x-slot name="description">
                    Visibilities & farm produce
                </x-slot>
            </x-reason>
            <x-reason>
                <x-slot name="icon">
                    <img src="{{ asset('images/icons/Group 15588.svg') }}" alt="">
                </x-slot>
                <x-slot name="title">
                    Customer Friendly
                </x-slot>
                <x-slot name="description">
                    Oustanding customer services & a brilliant experience
                </x-slot>
            </x-reason>
            <x-reason>
                <x-slot name="icon">
                    <img src="{{ asset('images/icons/Group 15589.svg') }}" alt="">
                </x-slot>
                <x-slot name="title">
                    Innovation
                </x-slot>
                <x-slot name="description">
                    Farmer's access to innovative ways to increase yield
                </x-slot>
            </x-reason>
            <x-reason>
                <x-slot name="icon">
                    <img src="{{ asset('images/icons/Group 15591.svg') }}" alt="">
                </x-slot>
                <x-slot name="title">
                    Distribution
                </x-slot>
                <x-slot name="description">
                    A strong supply chain of agriculture products to market
                </x-slot>
            </x-reason>
            <x-reason>
                <x-slot name="icon">
                    <img src="{{ asset('images/icons/Group 15590.svg') }}" alt="">
                </x-slot>
                <x-slot name="title">
                    Communication
                </x-slot>
                <x-slot name="description">
                    Increase access to information and off-take market
                </x-slot>
            </x-reason>
            <x-reason>
                <x-slot name="icon">
                    <img src="{{ asset('images/icons/Group 15592.svg') }}" alt="">
                </x-slot>
                <x-slot name="title">
                    Networking
                </x-slot>
                <x-slot name="description">
                    Connecting of farmers, Millers, Community Agents through Cooperative & Meetups
                </x-slot>
            </x-reason>
        </div>
    </section>
    <section class="flex flex-col items-center justify-center w-full space-y-10">
        <h2 class="text-lg font-semibold">Our Projects</h2>
        <!-- Slider main container -->
        <div class="w-full overflow-hidden border ">
            <div class="w-full h-72 swiper">
                <!-- Additional required wrapper -->
                <div class="w-full swiper-wrapper">
                    <!-- Slides -->
                    <div class="w-full h-full swiper-slide">
                        <img src="{{ asset('images/slider/An Maries Gallery Coperate Profile_page7_image10.jpg') }}"
                            class="object-cover w-full h-full" alt="image1">
                    </div>
                    <div class="w-full swiper-slide">
                        <img src="{{ asset('images/slider/An Maries Gallery Coperate Profile_page7_image12.jpg') }}"
                            class="object-cover w-full h-full" alt="image1">
                    </div>
                    <div class="w-full swiper-slide">
                        <img src="{{ asset('images/slider/An Maries Gallery Coperate Profile_page7_image13.jpg') }}"
                            class="object-cover w-full h-full" alt="image1">
                    </div>
                    <div class="w-full swiper-slide">
                        <img src="{{ asset('images/slider/An Maries Gallery Coperate Profile_page7_image2.jpg') }}"
                            class="object-cover w-full h-full" alt="image1">
                    </div>
                    <div class="w-full swiper-slide">
                        <img src="{{ asset('images/slider/IMG-20220201-WA0055 (1).jpg') }}"
                            class="object-cover w-full h-full" alt="image1">
                    </div>
                    <div class="w-full swiper-slide">
                        <img src="{{ asset('images/slider/IMG-20220201-WA0057.jpg') }}"
                            class="object-cover w-full h-full" alt="image1">
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </section>
    <section class="w-full bg-green-600">
        <div class="px-10 py-20 sm:px-20">
            <h2 class="text-lg font-semibold text-white">Reviews</h2>
            <div class="w-full pt-10">
                <div class="flex flex-wrap items-center w-full justify-evenly">
                    <x-testimonial>
                        <x-slot name="summary">Incredible Experience</x-slot>
                        <x-slot name="message">Actually, I heard shea butter darkens the skin and that made me a bit
                            skeptical about using but, After a few
                            days of rubbing, I realized the blackness was beginning to fade so I began to rub even more.
                            Right now, it is not completely gone but there is a huge difference. My skin is looking way
                            better.
                            I am grateful to you AMG Cosmetics.</x-slot>
                        <x-slot name="fullname">
                            Vivienne Okwori
                        </x-slot>
                        <x-slot name="profession">Accountant @ MeedNetworks</x-slot>
                    </x-testimonial>
                </div>
            </div>
        </div>
    </section>
    <footer class="flex flex-col text-white bg-gray-900 divide-y divide-gray-500">
        <div class="grid w-full grid-cols-1 px-10 py-10 mx-auto sm:px-20 md:grid-cols-3 gap-y-10 gap-x-5">
            <div class="flex flex-col space-y-5">
                <div class="flex flex-col items-center justify-start">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-24">
                </div>
                <div>
                    <h3 class="mb-5 text-lg font-semibold text-center capitalize">Address</h3>
                    <address class="text-center">
                        Plot No. 257, Along 1(R) 421 Road,<br>
                        Federal Housing Authority,<br>
                        Lugbe Estate Abuja,<br>
                        Nigeria.
                    </address>
                </div>
                <div id="contact">
                    <h2 class="mb-5 text-lg font-semibold text-center capitalize">Contact Us</h2>
                    <div class="flex items-center justify-center w-full space-x-5 md:justify-center">
                        <a href="https://web.facebook.com/anmariesgallery"
                            class="w-8 p-2 bg-white rounded-full hover:opacity-50">
                            <img src="{{ asset('images/icons/facebook.png') }}" class="w-full h-full" alt="">
                        </a>
                        <a href="https://twitter.com/anmariesgallery"
                            class="w-8 p-2 bg-white rounded-full hover:opacity-50">
                            <img src="{{ asset('images/icons/twitter.png') }}" class="w-full h-full" alt="">
                        </a>
                        <a href="http://instagram.com/_u/anmariesgallery"
                            class="w-8 p-2 bg-white rounded-full hover:opacity-50">
                            <img src="{{ asset('images/icons/instagram.png') }}" class="w-full h-full" alt="">
                        </a>
                        <a href="https://wa.me/+2348050229095" class="w-8 p-2 bg-white rounded-full hover:opacity-50">
                            <img src="{{ asset('images/icons/whatsapp.png') }}" class="w-full h-full" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="">
                <h2 class="mb-5 text-lg font-semibold text-center capitalize">Our Network</h2>
                <ul
                    class="flex flex-col items-center justify-start space-y-2 text-sm leading-6 tracking-wide font-base">
                    <li>Farmers</li>
                    <li>Bundlers</li>
                    <li>Millers</li>
                    <li>Farmer Cooperative</li>
                    <li>Commodity Aggregators</li>
                    <li>Community Owners</li>
                    <li>Warehouse Owners</li>
                </ul>
            </div>
            <div>
                <div class="flex flex-col items-center justify-start">
                    <h3 class="text-lg font-bold text-center capitalize">Send Us A message</h3>
                    <form action="{{ route('send-message') }}" method="post"
                        class="flex flex-col items-center justify-start max-w-sm mt-5 space-y-2">

                        @csrf
                        <div class="flex flex-col items-start justify-start w-full space-y-1">
                            <label for="fullname" class="text-sm font-bold tracking-wider">Full Name</label>
                            <input type="text" name="fullname" required
                                class="w-full px-3 py-2 text-sm tracking-wider bg-gray-700 rounded-lg font-base focus:outline-none"
                                placeholder="Enter your full Name">
                        </div>

                        <div class="flex flex-col items-start justify-start w-full space-y-1">
                            <label for="email" class="text-sm font-bold tracking-wider">Email</label>
                            <input type="text" name="email" required
                                class="w-full px-3 py-2 text-sm tracking-wider bg-gray-700 rounded-lg font-base focus:outline-none"
                                placeholder="Enter your email">
                        </div>
                        <div class="flex flex-col items-start justify-start w-full space-y-1">
                            <label for="fullname" class="text-sm font-bold tracking-wider">Message</label>
                            <textarea name="message" cols="30" rows="5" required
                                class="w-full px-3 py-2 text-sm tracking-wider bg-gray-700 rounded-lg resize-none font-base focus:outline-none"
                                placeholder="Enter your Message"></textarea>
                        </div>

                        <button class="w-full py-2 text-center bg-green-700 rounded-lg" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex items-end justify-center py-2 text-gray-400">
            <p>&copy Copyrights {{ now()->year }} </p>
        </div>
    </footer>
</body>

</html>
