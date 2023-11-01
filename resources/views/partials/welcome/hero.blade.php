<section id="welcome-hero">
    <header>
            {{--NAVIGATION--}}
            <nav class="absolute z-10 w-full">
                <div class="relative flex h-32 items-center justify-between px-16 lg:px-10">
                    <ul
                        class="flex lg:absolute lg:top-24 lg:block"
                        id="nav-menu">
                        <li class="mr-8 text-xl lg:mb-4">
                            <a
                                class="text-accentWhite"
                                href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li class="mr-8 text-xl lg:mb-4">
                            <a
                                class="text-accentWhite"
                                href="#">Tools</a>
                        </li>
                        <li class="mr-8 text-xl lg:mb-4">
                            <a
                                class="text-accentWhite"
                                href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="text-xl">
                            <a
                                class="text-accentWhite"
                                href="#">Contact</a>
                        </li>
                    </ul>

                    <a
                        class="border-2 px-10 py-3 text-xl font-bold text-accentWhite"
                        href="#">Lets Talk
                    </a>
                </div>
                <div class="absolute top-5 left-1/2 -translate-x-1/2 transform">
                    <a href="/">
                        <x-icons.logo :width="150" :height="100"/>
                    </a>
                </div>
            </nav>

            {{--VIDEO--}}
            <div class="relative">
                <video
                    class="brightness-50"
                    width="1920"
                    height="1080"
                    muted
                    autoplay
                    loop>
                    <source
                        src="{{ Vite::asset('resources/assets/videos/header_video.mp4') }}"
                        type="video/mp4">
                    <source
                        src="{{ Vite::asset('resources/assets/videos/header_video.webm') }}"
                        type="video/webm">
                </video>

                {{--BOTTOM CTA--}}
                <div class="absolute bottom-20 left-16 text-sm">
                    <h1 class="text-6xl text-accentWhite">Custom <span class="text-primaryGreen">Decor</span>
                    </h1>
                    <div class="mt-3 w-3/5">
                        <p class="text-accentWhite">Crafting unique, personalized wooden writing instruments with
                                                    custom
                                                    laser engraving & stunning
                                                    Lichtenberg imaging</p>
                    </div>
                    <div class="mt-6">
                        <a
                            href="{{ route('shop') }}"
                            class="mt-5 border-2 px-14 py-2 text-xl font-semibold uppercase text-accentWhite btn-animation-2 sm:text-sm">Shop
                                                                                                                                         Now
                        </a>
                    </div>
                </div>
            </div>
    </header>
</section>
